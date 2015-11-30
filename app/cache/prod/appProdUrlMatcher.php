<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // guillaume_blog_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'guillaume_blog_homepage')), array (  '_controller' => 'Guillaume\\BlogBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/blog1')) {
            // blog
            if (rtrim($pathinfo, '/') === '/blog1') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'blog');
                }

                return array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::indexAction',  '_route' => 'blog',);
            }

            // blog_show
            if (preg_match('#^/blog1/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::showAction',));
            }

            // blog_new
            if ($pathinfo === '/blog1/new') {
                return array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::newAction',  '_route' => 'blog_new',);
            }

            // blog_create
            if ($pathinfo === '/blog1/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_blog_create;
                }

                return array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::createAction',  '_route' => 'blog_create',);
            }
            not_blog_create:

            // blog_edit
            if (preg_match('#^/blog1/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_edit')), array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::editAction',));
            }

            // blog_update
            if (preg_match('#^/blog1/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_blog_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_update')), array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::updateAction',));
            }
            not_blog_update:

            // blog_delete
            if (preg_match('#^/blog1/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_blog_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete')), array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::deleteAction',));
            }
            not_blog_delete:

        }

        // article_platform_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'article_platform_homepage');
            }

            return array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::indexAction',  '_route' => 'article_platform_homepage',);
        }

        // article_platform_newart
        if ($pathinfo === '/blog') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_article_platform_newart;
            }

            return array (  '_controller' => 'article\\PlatformBundle\\Controller\\BlogController::newAction',  '_route' => 'article_platform_newart',);
        }
        not_article_platform_newart:

        // article_platform_layout
        if ($pathinfo === '/layout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_article_platform_layout;
            }

            return array (  '_controller' => 'article\\PlatformBundle\\Controller\\AdvertController::layoutAction',  '_route' => 'article_platform_layout',);
        }
        not_article_platform_layout:

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ad')) {
                // article_platform_view
                if (0 === strpos($pathinfo, '/advert') && preg_match('#^/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_platform_view')), array (  '_controller' => 'article\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // article_platform_add
                if ($pathinfo === '/add') {
                    return array (  '_controller' => 'article\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'article_platform_add',);
                }

            }

            // article_platform_about
            if ($pathinfo === '/about') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_article_platform_about;
                }

                return array (  '_controller' => 'article\\PlatformBundle\\Controller\\AdvertController::aboutAction',  '_route' => 'article_platform_about',);
            }
            not_article_platform_about:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
