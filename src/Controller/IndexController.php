<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'lastname' => 'Mikel',
            'firstname' => 'Rémi',
            'birthdate' => new \DateTime('1989-01-18'),
            'phone' => '0766373794',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam modi similique nobis hic libero nisi tenetur iure labore nulla perspiciatis? Fugiat expedita autem consectetur numquam veniam harum dolore quam pariatur? Molestiae, facilis illum consequatur maiores quis saepe doloremque? Incidunt dolorem totam nobis unde harum consequuntur, facere aspernatur ipsa adipisci ullam vitae, perferendis voluptate animi esse dolor, eaque id quisquam repellendus. Praesentium, ab aspernatur similique quia voluptate eveniet repellendus veritatis necessitatibus, ex nobis corrupti sit saepe fuga non doloribus. Doloribus aperiam est quas totam perferendis adipisci quasi sapiente a, eum, ut expedita officia labore eligendi possimus mollitia dolorem quis. Non dolore mollitia eaque exercitationem fuga cum id saepe quod quae repellendus accusantium optio, ipsam nemo amet perferendis labore adipisci molestias dolores veritatis expedita earum, blanditiis perspiciatis tenetur sit? Quaerat perspiciatis sint consectetur magnam consequatur voluptate eligendi totam cupiditate blanditiis expedita minus in modi enim aliquam excepturi, ipsum suscipit ea. Vel, voluptatem.',
            'heigth' => 182.49586037291093,
            'weight' => 84.2847
        ]);
    }
}
