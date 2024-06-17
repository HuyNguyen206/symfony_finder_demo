<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FinderController extends AbstractController
{
    #[Route('/finder', name: 'app_finder')]
    public function __invoke(ParameterBagInterface $parameterBag): Response
    {
        $location = $parameterBag->get('kernel.project_dir') . '/public/demo';

        $finder = new Finder();

        $finder->in($location);

        // find all folder
//        $finder->directories();

        // find all files
//        $finder->files();

//        $finder->files()->name('*.txt');
//
//        $finder->files()->notName('*.txt');

//        $finder->files()->contains('VN-50');

//          $finder->files()->notContains('VN-50');

//        $finder->path('LongAn');

//        $finder->notPath('LongAn');

//        $finder->files()->size('< 0.01K');

//        $finder->files()->size('>= 0.01K')->size('<= 0.02K');

//         $finder->date('since yesterday');
//
//        $finder->date('>= 2024-01-01')->date('<= 2024-07-10');

//        $finder->depth('== 0');

//        $finder->depth('== 1');
//        $finder->depth('< 3');

//        $finder->sortByName(true);

        //Transforming Results into Arrays
//        dd(iterator_to_array($finder), iterator_count($finder));


//        foreach ($finder as $file) {
//            /**
//             * @var SplFileInfo $file
//             */
//            $name = $file->getSize();
//            $extension = $file->getExtension();
//            $size = $file->getSize();
//            $path = $file->getRelativePathname();
//            $accessTime = $file->getATime();
//            $modifiedTime = $file->getMTime();
//
//            // ...
//        }

        return $this->render('location.html.twig', compact('finder'));
    }
}
