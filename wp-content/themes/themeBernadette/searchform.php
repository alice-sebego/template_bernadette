<form class="d-flex" action="<?php esc_url(home_url('/')) ?>">
    <input name="s" class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" value="<?= get_search_query() ?>" >
    <button class="btn btn-outline-light" type="submit">Rechercher</button>
</form>