  <form name="contactform" method="post" action="email.php">
  <table style="width: 98%; padding: 1%;">
  <tr>
  <td valign="top">
    <label for="first_name">Ime *</label>
  </td>
  <td valign="top">
    <input  type="text" name="first_name" maxlength="40" size="20">
  </td>
  </tr>
  <tr>
  <td valign="top">
    <label for="last_name">Prezime *</label>
  </td>
  <td valign="top">
    <input  type="text" name="last_name" maxlength="40" size="20">
  </td>
  </tr>
  <tr>
  <td valign="top">
    <label for="email">Email *</label>
  </td>
  <td valign="top">
    <input  type="text" name="email" maxlength="70" size="20">
  </td>
  </tr>
  <tr>
  <td valign="top">
    <label for="telephone">Telefon</label>
  </td>
  <td valign="top">
    <input  type="text" name="telephone" maxlength="30" size="20">
  </td>
  </tr>
  <tr>
  <td valign="top">
    <label for="comments">Poruka *</label>
  </td>
  <td valign="top">
    <textarea  name="comments" maxlength="800" cols="20" rows="5"></textarea>
  </td>
  </tr>
  <tr>
  <td colspan="2" style="text-align:center">
    <input type="submit" value="Submit">   
  </td>
  </tr>
  </table>
  </form>