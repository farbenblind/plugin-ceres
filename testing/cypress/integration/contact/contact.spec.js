// / <reference types="cypress" />
context("Contact Page", () =>
{
    beforeEach(() =>
    {
        cy.visit("/kontakt/");

    });

    it("should check for page title", () =>
    {
        cy.get("h1").should("contain", "Kontakt");
    });

    it("should check for contact data", () =>
    {
        cy.get(".widget-contact-details").should("exist");
    });

    it("should check for Google Maps iFrame", () =>
    {
        cy.get(".widget-google-maps").should("exist");
    });

    it("should check for form-button", () =>
    {
        cy.getByTestingAttr("labelSubmit").should("exist");
    });




});



