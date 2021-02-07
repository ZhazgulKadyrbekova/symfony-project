<?php

namespace App\Controller;

use App\Entity\TruckZhazgul;
use App\Form\TruckZhazgul1Type;
use App\Repository\TruckZhazgulRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/truck/zhazgul")
 */
class TruckZhazgulController extends AbstractController
{
    /**
     * @Route("/", name="truck_zhazgul_index", methods={"GET"})
     */
    public function index(TruckZhazgulRepository $truckZhazgulRepository): Response
    {
        return $this->render('truck_zhazgul/index.html.twig', [
            'truck_zhazguls' => $truckZhazgulRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="truck_zhazgul_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $truckZhazgul = new TruckZhazgul();
        $form = $this->createForm(TruckZhazgul1Type::class, $truckZhazgul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($truckZhazgul);
            $entityManager->flush();

            return $this->redirectToRoute('truck_zhazgul_index');
        }

        return $this->render('truck_zhazgul/new.html.twig', [
            'truck_zhazgul' => $truckZhazgul,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="truck_zhazgul_show", methods={"GET"})
     */
    public function show(TruckZhazgul $truckZhazgul): Response
    {
        return $this->render('truck_zhazgul/show.html.twig', [
            'truck_zhazgul' => $truckZhazgul,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="truck_zhazgul_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TruckZhazgul $truckZhazgul): Response
    {
        $form = $this->createForm(TruckZhazgul1Type::class, $truckZhazgul);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('truck_zhazgul_index');
        }

        return $this->render('truck_zhazgul/edit.html.twig', [
            'truck_zhazgul' => $truckZhazgul,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="truck_zhazgul_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TruckZhazgul $truckZhazgul): Response
    {
        if ($this->isCsrfTokenValid('delete'.$truckZhazgul->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($truckZhazgul);
            $entityManager->flush();
        }

        return $this->redirectToRoute('truck_zhazgul_index');
    }

    /**
     * @Route("/search/form", name="search_form")
     */
    public function searchModelForm() : Response {
        return $this->render('truck_zhazgul/search.model.html.twig');
    }

    /**
     * @Route("/search/id", name="search_id")
     */
    public function searchID() : Response {

        if (!isset($_POST['id'])) 
            throw $this->createNotFoundException('ID is not set');
        $id = $_POST['id'];

        $result =  $this->getDoctrine()
            ->getRepository(TruckZhazgul::class)
            ->findBy(array('id'=>$id));

        return $this->render('truck_zhazgul/index.html.twig', [
            'truck_zhazguls' => $result,
        ]);
    }

    /**
     * @Route("/search/model", name="search_model")
     */
    public function searchModel() : Response {

        if (!isset($_POST['model'])) 
            throw $this->createNotFoundException('Model is not set');
        $model = $_POST['model'];

        $result =  $this->getDoctrine()
            ->getRepository(TruckZhazgul::class)
            ->findBy(array('model'=>$model));

        return $this->render('truck_zhazgul/index.html.twig', [
            'truck_zhazguls' => $result,
        ]);
    }

    /**
     * @Route("/search/year", name="search_year")
     */
    public function searchYear() : Response {

        if (!isset($_POST['year'])) 
            throw $this->createNotFoundException('year is not set');
        $year = $_POST['year'];

        $result =  $this->getDoctrine()
            ->getRepository(TruckZhazgul::class)
            ->findBy(array('year'=>$year));

        return $this->render('truck_zhazgul/index.html.twig', [
            'truck_zhazguls' => $result,
        ]);
    }

    /**
     * @Route("/search/owner", name="search_owner")
     */
    public function searchOwner() : Response {

        if (!isset($_POST['owner'])) 
            throw $this->createNotFoundException('owner is not set');
        $owner = $_POST['owner'];

        $result =  $this->getDoctrine()
            ->getRepository(TruckZhazgul::class)
            ->findBy(array('owner'=>$owner));

        return $this->render('truck_zhazgul/index.html.twig', [
            'truck_zhazguls' => $result,
        ]);
    }

     /**
     * @Route("/search/price", name="search_price")
     */
    public function searchPrice() : Response {

        if (!isset($_POST['price'])) 
            throw $this->createNotFoundException('price is not set');
        $price = $_POST['price'];

        $result =  $this->getDoctrine()
            ->getRepository(TruckZhazgul::class)
            ->findBy(array('price'=>$price));

        return $this->render('truck_zhazgul/index.html.twig', [
            'truck_zhazguls' => $result,
        ]);
    }

}
