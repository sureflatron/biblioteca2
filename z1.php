<script type="text/javascript">
function submitform()
{
     var theForm = document.forms['form1'];
     if (!theForm) {
         theForm = document.form1;
     }
     theForm.submit();
}
</script> 
<form id="form1" name="form1" action="handle-data.php">
Search: <input type='text' name='query' />
<a href="javascript: submitform()">Search</a>
</form>