<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ArticleController;
use Symfony\Component\HttpFoundation\Request;

class ExampleTest extends TestCase
{
    /**
     * Test unitaire
     * de createNewArticle
     * verifie que le nom est bien saisi
     * @return void
     */
    public function test_article_nom()
    {

        $articleController = new ArticleController();
        $article = $articleController->createNewArticle(
            "test",
            "",
            10,
            100,
            0
        );
        $this->assertEquals("test", $article->nom);
    }
    /**
     * Test unitaire
     * de createNewArticle
     * verifie que le prix est bien saisi
     * @return void
     */
    public function test_article_prix()
    {

        $articleController = new ArticleController();
        $article = $articleController->createNewArticle(
            "test",
            "",
            10,
            100,
            0
        );
        $this->assertEquals(10, $article->prix);
    }

        /**
     * Test unitaire
     * de createNewArticle
     * verifie que la quantite_stock est bien saisi
     * @return void
     */
    public function test_article_quantite_stock()
    {

        $articleController = new ArticleController();
        $article = $articleController->createNewArticle(
            "test",
            "",
            10,
            100,
            0
        );
        $this->assertEquals(100, $article->quantite_stock);
    }

        /**
     * Test unitaire
     * de createNewArticle
     * verifie que la selection est bien saisi
     * @return void
     */
    public function test_article_selection()
    {

        $articleController = new ArticleController();
        $article = $articleController->createNewArticle(
            "test",
            "",
            10,
            100,
            0
        );
        $this->assertEquals(0, $article->selection);
    }
}
