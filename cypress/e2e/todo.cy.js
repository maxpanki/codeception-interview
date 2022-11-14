describe('Test task test', () => {
  Cypress.on('uncaught:exception', (err, runnable) => {
    // returning false here prevents Cypress from
    // failing the test
    return false
  })

  it('test PitchBox', { scrollBehavior: false },() => {
    cy.visit('http://pitchbox.com/')
    cy.get('#menu-item-3078')
        .realHover()
        .find('#menu-item-3081>a')
        .should('contain.text', 'Knowledge Base')
        .invoke('removeAttr', 'target')
        .click()
    cy.get('.container-inner > .search > #query')
        .type('MX')
    cy.get('input[type="submit"]')
        .click()
    cy.get('.search-result-link')
        .should('contain.text', 'What is MX Right?')
  })
})
