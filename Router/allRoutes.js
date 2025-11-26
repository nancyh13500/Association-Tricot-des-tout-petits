import Route from "./Route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/projets", "Projets", "/pages/projets.html"),
    new Route("/actualites", "Actualités", "/pages/actualites.html"),
    new Route("/prochainement", "Prochain atelier", "/pages/prochainement.html"),
    new Route("/apropos", "A propos", "/pages/apropos.html"),
    new Route("/contact", "Contact", "/pages/contact.html"),
];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Tricot des tout petits";