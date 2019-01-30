<?php

namespace App\Controller;

use App\Entity\Autres;
use App\Form\AutreType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;

class MemberController extends AbstractController
{
    /**
     * @Route("/member", name="member")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $user = $this->getUser();

        $autres = new Autres();
        $form = $this->createForm(AutreType::class, $autres);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $autres->setUser($user);
            $autres->setCreatedAt(new \DateTime());
            $manager->persist($autres);
            $manager->flush();
            $this->addFlash('success', 'Vos informations ont été bien enregistré.');
            return $this->redirectToRoute('member');

        }

        return $this->render('member/index.html.twig', [
            'controller_name' => 'MemberController',
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit(Request $request, ObjectManager $manager,Autres $autres)
    {
        $form = $this->createForm(AutreType::class, $autres);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($autres);
            $manager->flush();
            return $this->redirectToRoute('admin');

        }

        return $this->render('member/indexe.html.twig', [
            'controller_name' => 'MemberController',
            'title'=>'MODIFICATION DES DONNÉES',
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(ObjectManager $manager,Autres $autres)
    {

        $manager->remove($autres);
        $manager->flush();
        return $this->redirectToRoute('admin');
    }






     /**
     * @Route("/memberview", name="memberview")
     */
    public function indx(Request $request, ObjectManager $manager)
    {
        $session= $this->getDoctrine()->getRepository(Autres::class)->findAll();

        return $this->render('member/inex.html.twig', [
            'autres' => $session,
        ]);
    }


}
