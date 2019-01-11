<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/campeonatos' => array(array(array('_route' => 'campeonatos', '_controller' => 'App\\Controller\\CampeonatosController::index'), null, null, null, false, null)),
            '/' => array(array(array('_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null, false, null)),
            '/partidas' => array(array(array('_route' => 'partidas', '_controller' => 'App\\Controller\\PartidasController::index'), null, null, null, false, null)),
            '/times' => array(array(array('_route' => 'times', '_controller' => 'App\\Controller\\TimesController::index'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/campeonato/classificacao/([^/]++)(*:41)'
                    .'|/partidas/listar\\-por\\-time/([^/]++)(*:84)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:122)'
                        .'|wdt/([^/]++)(*:142)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:188)'
                                .'|router(*:202)'
                                .'|exception(?'
                                    .'|(*:222)'
                                    .'|\\.css(*:235)'
                                .')'
                            .')'
                            .'|(*:245)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            41 => array(array(array('_route' => 'classificacao', '_controller' => 'App\\Controller\\CampeonatosController::classificacao'), array('id'), null, null, false, null)),
            84 => array(array(array('_route' => 'listar_partidas', '_controller' => 'App\\Controller\\PartidasController::partidasPorTimes'), array('id'), null, null, false, null)),
            122 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            142 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            188 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            202 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            222 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            235 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            245 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
