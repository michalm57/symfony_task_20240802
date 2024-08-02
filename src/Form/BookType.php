<?php
namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('author', TextType::class, [
                'label' => 'Author',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'attr' => ['class' => 'form-control', 'rows' => 4]
            ])
            ->add('publicationYear', IntegerType::class, [
                'label' => 'Publication Year',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('isbn', TextType::class, [
                'label' => 'ISBN',
                'required' => true,
                'attr' => ['class' => 'form-control']
            ])
            ->add('imagePath', TextType::class, [
                'label' => 'Image URL (optional)',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter image URL']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
