<div class="col-12">
    <div class="row row-cols-4" id="grid">
        <?php foreach($this->Builder->menu('crm') as $route => $nav): ?>
            <?php if (strpos($route, '.') !== false) { $url = 'https://'.$nav['link']; } else { $url = $nav['link']; } ?>
            <a href="<?= $url ?>" class="col animate-pulse-hover mt-3">
                <div class="card card-body d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-<?= $nav['icon'] ?> fs-1"></i>
                    <span><?= $this->Locale->get($nav['label']); ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
