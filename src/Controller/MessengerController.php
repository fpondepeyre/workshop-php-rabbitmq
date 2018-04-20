<?php

namespace App\Controller;

use App\Form\TaskType;
use App\Message\TaskMessage;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MessengerController
 */
class MessengerController extends Controller
{
    /**
     * @Route("/messenger", name="messenger")
     *
     * @param MessageBusInterface $bus
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function index(MessageBusInterface $bus, Request $request)
    {
        $form = $this->createForm(TaskType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $bus->dispatch(new TaskMessage($data['title']));

            return $this->redirectToRoute('messenger');
        }

        return $this->render('task/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
