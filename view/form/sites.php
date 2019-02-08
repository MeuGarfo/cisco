<form class="" action="sites" method="GET">
    <input type="hidden" name="dia" value="30">
    <textarea name="sites" rows="8" cols="80" placeholder="Digite um site por linha"><?php if(isset($sitesValue)){e($sitesValue);} ?></textarea><br>
    <button type="submit">Buscar</button>
</form>
