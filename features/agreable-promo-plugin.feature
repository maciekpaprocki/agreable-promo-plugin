Feature: agreable-promo-plugin
  Test the Promo plugin for competition and promo entries

  Scenario: Enter a promo successfully
    Given I am on "/news/test-system-promo-post"
    When I click ".agreable-promo__button--enter"
    And I type a random email address in to ".agreable-promo__input[type='Email']"
    And I type a "FirstNameTest" in to "[name='FirstName']"
    And I type a "LastNameTest" in to "[name='LastName']"
    And I click ".agreable-promo__checkbox"
    And I click submit
    Then I should see success message
