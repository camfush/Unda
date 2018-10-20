# features/name.feature
Feature: name
	In order to know I am logged in
	As an Unda user
	I need to see my name displayed on the page

Background:
	Given the user "Cameron Frost" exists
	And the user "Another Cameron" exists

Scenario: Logged in as Cameron Frost
	Given I am logged in as "Cameron Frost"
	And I am at the path "/"
	Then I should see "Cameron Frost" at the top of the screen