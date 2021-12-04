<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;

class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
             // panels usually display only a title
        FormField::addPanel('User Details'),
            TextField::new('firstName')->setColumns('col-sm-4 col-lg-3 col-xxl-3'),
            TextField::new('lastName')->setColumns('col-sm-4 col-lg-3 col-xxl-3'),
            TextField::new('surname')->setColumns('col-sm-4 col-lg-3 col-xxl-3'),
            TextField::new('phone')->setColumns('col-sm-6 col-lg-4 col-xxl-3'),
            TextField::new('email')->setColumns('col-sm-6 col-lg-4 col-xxl-3'),
        FormField::addPanel('Passport Details'),
            TextField::new('passport')->setColumns('col-sm-4 col-lg-3 col-xxl-3'),
            DateField::new('issued')->setColumns('col-sm-4 col-lg-3 col-xxl-3'),
            DateField::new('expiry')->setColumns('col-sm-4 col-lg-3 col-xxl-3'),
            TextField::new('nationality')->setColumns('col-sm-6 col-lg-4 col-xxl-3'),
            
            TextField::new('organisation')->setColumns('col-sm-6 col-lg-4 col-xxl-3'),
        ];
    }
    
}
