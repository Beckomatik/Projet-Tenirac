
function checkForm(form)
{
  
  if(!form.objet.checked) {
    alert("Attention ! Vous devez accepter la politique de confidentialit√© !");
    form.objet.focus();
    return false;
  }
  return true;
}