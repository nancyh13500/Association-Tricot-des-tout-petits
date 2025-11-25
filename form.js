const CONTACT_FORM_SELECTOR = "[data-contact-form]";
const STATUS_SELECTOR = "[data-contact-status]";
const CONTACT_ENDPOINT = "/api/contact";

const serializeForm = (form) => ({
  nom: form.elements.nom?.value.trim() ?? "",
  email: form.elements.email?.value.trim() ?? "",
  message: form.elements.message?.value.trim() ?? "",
});

const setStatusMessage = (statusNode, message, variant = "info") => {
  if (!statusNode) return;
  statusNode.textContent = message;
  statusNode.dataset.variant = variant;
};

const sendContactRequest = async (payload) => {
  const response = await fetch(CONTACT_ENDPOINT, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(payload),
  });

  if (!response.ok) {
    const { message } = await response.json().catch(() => ({
      message: "Une erreur est survenue sur le serveur.",
    }));
    throw new Error(message);
  }
};

const handleSubmit = async (event) => {
  event.preventDefault();
  const form = event.currentTarget;
  const statusNode =
    form.querySelector(STATUS_SELECTOR) ||
    document.querySelector(STATUS_SELECTOR);

  const payload = serializeForm(form);

  if (!payload.nom || !payload.email || !payload.message) {
    setStatusMessage(
      statusNode,
      "Merci de remplir tous les champs requis.",
      "warning",
    );
    return;
  }

  setStatusMessage(
    statusNode,
    "Envoi en cours, merci de patienter...",
    "info",
  );

  try {
    await sendContactRequest(payload);
    form.reset();
    setStatusMessage(
      statusNode,
      "Merci pour votre message. Nous revenons vers vous sous 48 h.",
      "success",
    );
  } catch (error) {
    setStatusMessage(
      statusNode,
      error.message || "Impossible d'envoyer le message.",
      "error",
    );
  }
};

document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector(CONTACT_FORM_SELECTOR);
  if (!form) return;
  form.addEventListener("submit", handleSubmit);
});
