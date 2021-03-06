<li class="lots__item lot">
    <div class="lot__image">
        <img src="<?=htmlspecialchars($lot['lot-img']); ?>" width="350" height="260"
            alt="<?=htmlspecialchars($lot['lot-name']);?>">
    </div>
    <div class="lot__info">
        <span class="lot__category"><?=htmlspecialchars($lot['category']);?></span>
        <h3 class="lot__title"><a class="text-link"
                href="lot.php?lot_id=<?=$lot_id;?>"><?=htmlspecialchars($lot['lot-name']);?></a></h3>
        <div class="lot__state">
            <div class="lot__rate">
                <span class="lot__amount">Стартовая цена</span>
                <span class="lot__cost"><?=format_price(htmlspecialchars($lot['lot-rate']));?></span>
            </div>
            <div class="lot__timer timer">
                <?=set_timer();?>
            </div>
        </div>
    </div>
</li>
