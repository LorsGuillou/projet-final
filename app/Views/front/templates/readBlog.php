<?php include_once ('app/Views/front/layout/header.php') ?>

<main class="container">
    <article id="read-blog">
        <h1 class="blog-title"><?= $blog['titleFR'] ?><span class="txt-bzh"><?= $blog['titleBZH'] ?></span></h1>
        <p class="blog-date"><?= $blog['date'] ?></p>
        <div class="alerts">
            <?= $alert ?>
        </div>
        <img src="./Public/admin/img/blog/<?= $blog['img'] ?>" alt="<?= $blog['titleFR'] ?>">
        <p class="blog-body"><?= $blog['contentFR'] ?></p>
        <p class="blog-body txt-bzh"><?= $blog['contentBZH'] ?></p>
    </article>
    <?php if (isset($comments)) : ?>
    <h3>Commentaires (<?= $number['0'] ?>)</h3>
    <div id="comments">
        <?php foreach ($comments as $comment) : ?>
        <div class="one-comment">
            <div class="comment-head">
                <img src="./Public/front/img/avatars/<?= $comment['avatar'] ?>">
                <h5><?= $comment['username'] ?></h5>
                <?php if (!empty($_SESSION) && $comment['idUser'] === $_SESSION['id'] || !empty($_SESSION) && $_SESSION['role'] === 1) : ?>
                <a href="blogDeleteComment&id=<?= $comment['id'] ?>&idPage=<?= $blog['id'] ?>"
                    title="Effacer le commentaire">
                    <i class="fa-solid fa-trash-can action-delete"></i>
                </a>
                <?php endif; ?>
            </div>
            <p class="comment-content comment-date"><?= $comment['date'] ?></p>
            <p class="comment-content comment-text"><?= $comment['comment'] ?></p>

        </div>
        <?php endforeach ?>
    </div>
    <?php endif;
    if (!empty($_SESSION)) : ?>
    <h4>Laisser un commentaire</h4>
    <div id="comment-writing">
        <form id="commenting" action="blogComment&id=<?= $blog['id'] ?>" method="post">
            <p>
                <textarea name="type-comment" maxlength="250" placeholder="..."></textarea>
            </p>
            <p>
                <button type="submit" class="submit">Envoyer</button>
                <button type="reset" class="reset">Effacer</button>
            </p>
        </form>
    </div>
        <?php else : ?>
    <div id="comment-visitor">
        <p>Vous souhaitez commenter sur cet article ? <a href="register">Créez un compte</a> ou <a
                href="login">connectez-vous</a>.</p>
        <p class="txt-bzh">C'hoant ho peus da skrivañ un evezhiadenn ? <a href="register">Krouit ur c'hont</a> pe <a
                href="login">digerit un dalc'h</a>.</p>
    </div>
    <?php endif; ?>
</main>

<?php include_once ('app/Views/front/layout/footer.php') ?>