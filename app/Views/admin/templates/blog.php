<?php include_once('app/Views/admin/layout/header.php') ?>


            <h1>Articles</h1>
            <form id="blog-write" action="indexAdmin.php?action=write" method="post">
                <p>
                    <input type="text" id="blog-title" name="blog-title" placeholder="Titre">
                </p>
                <p>
                    <input type="text" id="blog-excerpt" name="blog-excerpt" placeholder="Extrait">
                </p>
                <p>
                    <textarea id="blog-content" name="blog-content" placeholder="Contenu"></textarea>
                </p>
                <!-- <p>
                    <input type="file">
                </p> -->
                <p>
                    <button type="submit" id="blog-submit">Envoyer</button>
                </p>
            </form>
        </section>
    </main>