<?php

namespace App\Controller;



use PhpParser\Node\Name;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    public  $authors = array(
        array('id' => 1, 'picture' => '/images/victor.jpeg', 'username' => 'Victor Hugo', 'email' =>
        'victor.hugo@gmail.com ', 'nb_books' => 100),
        array('id' => 2, 'picture' => '/images/william.jpeg', 'username' => ' William Shakespeare', 'email' =>
        ' william.shakespeare@gmail.com', 'nb_books' => 200),
        array('id' => 3, 'picture' => '/images/taha.jpeg', 'username' => 'Taha Hussein', 'email' =>
        'taha.hussein@gmail.com', 'nb_books' => 300),

    );
    public  $totalBooks = 0;
    public $nbAU = 0;
    public $x = array();



    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    public function showAuthor($name)
    {
        return $this->render('/author/show.html.twig', [
            'name' => $name,
        ]);
    }


    #[Route('/authors', name: 'liste')]
    public function list()
    {
        if (empty($this->authors)) {
            die();
        } else {
            foreach ($this->authors as $author) {

                $this->totalBooks += $author['nb_books'];
                $author['username'] =  strtoupper($author['username']);
                var_dump($author['username']);
            }
        }
        $this->nbAU =  count($this->authors);


        return $this->render('/author/list.html.twig', [
            'Books' => $this->totalBooks,
            'author' => $this->authors,
            'nbauth' => $this->nbAU,

        ]);
    }


    #[Route('/authors/{id}', name: 'show')]
    public function authorDetails($id)
    {
        if (empty($this->authors)) {
            die();
        } else {
            foreach ($this->authors as $author) {
                if ($author['id'] == $id) {
                    $this->x =  $author;
                    var_dump($author['id']);
                }
            }
        }

        return $this->render('/author/showAuthor.html.twig', [
            'author' => $this->x,
        ]);
    }
}
