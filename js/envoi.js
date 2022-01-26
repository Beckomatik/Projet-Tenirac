
function checkForm(form)
{
  
  if(!form.objet.checked) {
    alert("Attention ! Vous devez accepter la politique de confidentialité !");
    form.objet.focus();
    return false;
  }
  return true;
}