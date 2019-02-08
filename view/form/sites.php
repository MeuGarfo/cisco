<form class="" action="sites" method="GET" id="sitesFrm">
    <input type="hidden" name="dia" value="30">
    <textarea onkeyup="inputKeyUp(event)" name="sites" rows="8" cols="80" placeholder="Digite um site por linha"><?php if(isset($sitesValue)){e($sitesValue);} ?></textarea><br>
    <button type="submit">Buscar</button>
</form>
<script type="text/javascript">
function inputKeyUp(e) {
    e.which = e.which || e.keyCode;
    if(e.which == 13) {
        document.getElementById("sitesFrm").submit(); 
    }
}
</script>
