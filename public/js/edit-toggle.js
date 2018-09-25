"use strict";

function TurnOn(element) {
  element.style.display = "table-row";
}

function TurnOff(element) {
  element.style.display = "none";
}

function FetchElement(elementID) {
  return document.getElementById(elementID);
}

function ToggleTable(firstID, secondID) {
  TurnOff(FetchElement(firstID));
  TurnOn(FetchElement(secondID));
}

function ToggleName() {
  currentEdit = "name";
  ToggleTable("name", "name-edit");
}

function ToggleUser() {
  currentEdit = "user";
  ToggleTable("user", "user-edit");
}

function ToggleEmail() {
  currentEdit = "email";
  ToggleTable("email", "email-edit");
}

function TogglePassword() {
  currentEdit = "password";
  ToggleTable("password", "password-edit");
}

var currentEdit = "";

function init() {
  var editName = FetchElement("edit-name");
  editName.onclick = ToggleName;
  var editUser = FetchElement("edit-user");
  editUser.onclick = ToggleUser;
  var editEmail = FetchElement("edit-email");
  editEmail.onclick = ToggleEmail;
  var editPassword = FetchElement("edit-password");
  editPassword.onclick = TogglePassword;
}

window.onload = init;
