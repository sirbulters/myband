<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

require 'libs/functions.php';

// DEBUG MODE:
// $templateParser->debugging = true;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Triggerfinger - Joris Bulters - MD2A');
// Toon de template: output html
$templateParser->display('head.tpl');
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$templateParser->assign('curr_page', $page);
$templateParser->display('header.tpl');

//$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if (isset($_GET['page_nr'])) {
    $templateParser->assign('page_nr', $_GET['page_nr']);
} else {
    $templateParser->assign('page_nr', 1);
}

//verschillende paginas
switch($page){
    case 'home':
        //homeview
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        require 'model/select_newsarticles.php';
        $templateParser->assign('result',$result);
        $templateParser->assign('pages', $num_pages);
        $templateParser->display('newsarticles.tpl');   

        break;

    case 'newsarticles':

        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        require 'model/select_newsarticles.php';
        $templateParser->assign('result',$result);
        $templateParser->assign('pages', $num_pages);
        $templateParser->display('newsarticles.tpl');
        break;
    case 'tour':
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;
        require 'model/select_tourdata.php';
        $templateParser->assign('result',$result);
        $templateParser->assign('pages', $num_pages);
        $templateParser->display('tour.tpl');
        break;
    case 'about':
        $templateParser->display('about.tpl');
        break;
    case 'music':
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

        require 'model/select_musicdata.php';
        $templateParser->assign('result',$result);
        $templateParser->assign('pages', $num_pages);
        $templateParser->display('music.tpl');
        break;
    case 'search':
        $search_string = isset($_POST['search_string']) ? $_POST['search_string']: '';
        require 'model/search_newsarticles.php';

        $templateParser->assign('articles_result', $articles_result);
        $templateParser->assign('tourdata_result', $tourdata_result); //
        $templateParser->assign('musicdata_result', $musicdata_result); //
        $templateParser->display('search_result.tpl');
        //model: get search result
        //pass result to smarty
        //display search template

    default;

}

include('views/footer.tpl');