<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\UserRoom;
use AppBundle\Entity\Appartement;
use AppBundle\Entity\Residence;
use AppBundle\Entity\TypeDocument;
use AppBundle\Entity\Document;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Document controller.
 *
 * @Route("document")
 */
class DocumentController extends Controller
{
    /**
     * Lists all document entities.
     *
     * @Route("/", name="document_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documents = $em->getRepository('AppBundle:Document')->findAll();

        return $this->render('document/index.html.twig', array(
            'documents' => $documents,
        ));
    }

    /**
     * Creates a new document entity.
     *
     * @Route("/new", name="document_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $type_documents = $em->getRepository('AppBundle:TypeDocument')->findAll();

        $document = new Document();
        $form = $this->createForm('AppBundle\Form\DocumentType', $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $document->getPath();

            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Move the file to the directory where documents are stored
            $file->move(
                $this->getParameter('documents_directory'),
                $fileName
            );

            // Update the 'document' property to store the PDF file name
            // instead of its contents
            $document->setPath($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($document);
            $em->flush();

            return $this->redirectToRoute('document_show', array('id' => $document->getId()));
        }

        return $this->render('document/new.html.twig', array(
            'document' => $document,
            'type_documents' =>$type_documents,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a document entity.
     *
     * @Route("/{id}", name="document_show")
     * @Method("GET")
     */
    public function showAction(Document $document)
    {
        $deleteForm = $this->createDeleteForm($document);
        $em = $this->getDoctrine()->getManager();
        $type_document = $em->getRepository('AppBundle:TypeDocument')->findOneBy(array('id'=>$document->getIdType()));
        return $this->render('document/show.html.twig', array(
            'document' => $document,
            'type_document' => $type_document,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing document entity.
     *
     * @Route("/{id}/edit", name="document_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Document $document)
    {
        $deleteForm = $this->createDeleteForm($document);
        $editForm = $this->createForm('AppBundle\Form\DocumentType', $document);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('document_edit', array('id' => $document->getId()));
        }

        return $this->render('document/edit.html.twig', array(
            'document' => $document,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a document entity.
     *
     * @Route("/{id}", name="document_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Document $document)
    {
        $form = $this->createDeleteForm($document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($document);
            $em->flush();
        }

        return $this->redirectToRoute('document_index');
    }

    /**
     * Creates a form to delete a document entity.
     *
     * @param Document $document The document entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Document $document)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('document_delete', array('id' => $document->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
