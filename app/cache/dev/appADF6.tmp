<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // dex_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dex_homepage')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/a')) {
            // qcm_homepage
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\DefaultController::indexAction',  '_route' => 'qcm_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/question')) {
                    // question
                    if (rtrim($pathinfo, '/') === '/admin/question') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'question');
                        }

                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question',);
                    }

                    // question_show
                    if (preg_match('#^/admin/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_show')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::showAction',));
                    }

                    // question_new
                    if ($pathinfo === '/admin/question/new') {
                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
                    }

                    // question_create
                    if ($pathinfo === '/admin/question/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_question_create;
                        }

                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::createAction',  '_route' => 'question_create',);
                    }
                    not_question_create:

                    // question_edit
                    if (preg_match('#^/admin/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::editAction',));
                    }

                    // question_update
                    if (preg_match('#^/admin/question/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_question_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_update')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::updateAction',));
                    }
                    not_question_update:

                    // question_delete
                    if (preg_match('#^/admin/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_question_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\QuestionController::deleteAction',));
                    }
                    not_question_delete:

                }

                if (0 === strpos($pathinfo, '/admin/reponse')) {
                    // reponse
                    if (rtrim($pathinfo, '/') === '/admin/reponse') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reponse');
                        }

                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::indexAction',  '_route' => 'reponse',);
                    }

                    // reponse_show
                    if (preg_match('#^/admin/reponse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_show')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::showAction',));
                    }

                    // reponse_new
                    if ($pathinfo === '/admin/reponse/new') {
                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::newAction',  '_route' => 'reponse_new',);
                    }

                    // reponse_create
                    if ($pathinfo === '/admin/reponse/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reponse_create;
                        }

                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::createAction',  '_route' => 'reponse_create',);
                    }
                    not_reponse_create:

                    // reponse_edit
                    if (preg_match('#^/admin/reponse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_edit')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::editAction',));
                    }

                    // reponse_update
                    if (preg_match('#^/admin/reponse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_reponse_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_update')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::updateAction',));
                    }
                    not_reponse_update:

                    // reponse_delete
                    if (preg_match('#^/admin/reponse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_reponse_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponse_delete')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseController::deleteAction',));
                    }
                    not_reponse_delete:

                }

                if (0 === strpos($pathinfo, '/admin/dashboard')) {
                    // reponseexacte
                    if (rtrim($pathinfo, '/') === '/admin/dashboard') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reponseexacte');
                        }

                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::indexAction',  '_route' => 'reponseexacte',);
                    }

                    // reponseexacte_show
                    if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponseexacte_show')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::showAction',));
                    }

                    // reponseexacte_new
                    if ($pathinfo === '/admin/dashboard/new') {
                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::newAction',  '_route' => 'reponseexacte_new',);
                    }

                    // reponseexacte_create
                    if ($pathinfo === '/admin/dashboard/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reponseexacte_create;
                        }

                        return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::createAction',  '_route' => 'reponseexacte_create',);
                    }
                    not_reponseexacte_create:

                    // reponseexacte_edit
                    if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponseexacte_edit')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::editAction',));
                    }

                    // reponseexacte_update
                    if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_reponseexacte_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponseexacte_update')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::updateAction',));
                    }
                    not_reponseexacte_update:

                    // reponseexacte_delete
                    if (preg_match('#^/admin/dashboard/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_reponseexacte_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponseexacte_delete')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\ReponseExacteController::deleteAction',));
                    }
                    not_reponseexacte_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            // qcm_getresponse
            if ($pathinfo === '/reponse') {
                return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\DefaultController::reponseAction',  '_route' => 'qcm_getresponse',);
            }

            // qcm_jsrouting
            if ($pathinfo === '/route') {
                return array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\AjaxController::indexAction',  '_route' => 'qcm_jsrouting',);
            }

        }

        // qcm_webservice
        if (0 === strpos($pathinfo, '/questionParCategorie') && preg_match('#^/questionParCategorie/(?P<idCategorie>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_qcm_webservice;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'qcm_webservice')), array (  '_controller' => 'Qcm\\QcmBundle\\Controller\\DefaultController::WebServiceAction',  '_format' => 'json',  '_locale' => 'en',));
        }
        not_qcm_webservice:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        if (0 === strpos($pathinfo, '/api')) {
            // api_get_user
            if (0 === strpos($pathinfo, '/api/users') && preg_match('#^/api/users/(?P<username>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_user')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getUserAction',  '_format' => 'json',));
            }
            not_api_get_user:

            // api_get_me
            if (0 === strpos($pathinfo, '/api/me') && preg_match('#^/api/me(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_me;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_me')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getMeAction',  '_format' => 'json',));
            }
            not_api_get_me:

            // api_get_all_question
            if (0 === strpos($pathinfo, '/api/all/question') && preg_match('#^/api/all/question(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_all_question;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_all_question')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getAllQuestionAction',  '_format' => 'json',));
            }
            not_api_get_all_question:

            if (0 === strpos($pathinfo, '/api/questions')) {
                // api_get_question_by_categorie
                if (preg_match('#^/api/questions/(?P<idCategorie>[^/]++)/by/categorie(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_question_by_categorie;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_question_by_categorie')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getQuestionByCategorieAction',  '_format' => 'json',));
                }
                not_api_get_question_by_categorie:

                // api_get_question_by_categories
                if (preg_match('#^/api/questions/(?P<categorie>[^/]++)/by/categories(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_question_by_categories;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_question_by_categories')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getQuestionByCategoriesAction',  '_format' => 'json',));
                }
                not_api_get_question_by_categories:

            }

            // api_get_all_categorie
            if (0 === strpos($pathinfo, '/api/all/categorie') && preg_match('#^/api/all/categorie(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_all_categorie;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_all_categorie')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getAllCategorieAction',  '_format' => 'json',));
            }
            not_api_get_all_categorie:

            if (0 === strpos($pathinfo, '/api/reponse')) {
                // api_get_reponse_exacte
                if (0 === strpos($pathinfo, '/api/reponse/exacte') && preg_match('#^/api/reponse/exacte(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_reponse_exacte;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_reponse_exacte')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getReponseExacteAction',  '_format' => 'json',));
                }
                not_api_get_reponse_exacte:

                // api_get_reponse_par_question
                if (0 === strpos($pathinfo, '/api/reponses') && preg_match('#^/api/reponses/(?P<idQuestion>[^/]++)/par/question(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_reponse_par_question;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_reponse_par_question')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getReponseParQuestionAction',  '_format' => 'json',));
                }
                not_api_get_reponse_par_question:

            }

            if (0 === strpos($pathinfo, '/api/all')) {
                // api_get_all_reponse
                if (0 === strpos($pathinfo, '/api/all/reponse') && preg_match('#^/api/all/reponse(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_all_reponse;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_all_reponse')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getAllReponseAction',  '_format' => 'json',));
                }
                not_api_get_all_reponse:

                // api_get_all_utilisateur
                if (0 === strpos($pathinfo, '/api/all/utilisateur') && preg_match('#^/api/all/utilisateur(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_all_utilisateur;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_all_utilisateur')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getAllUtilisateurAction',  '_format' => 'json',));
                }
                not_api_get_all_utilisateur:

            }

            // api_get_reponse_par_question_par_categorie
            if (0 === strpos($pathinfo, '/api/reponses') && preg_match('#^/api/reponses/(?P<categorie>[^/]++)/par/question/par/categorie(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_get_reponse_par_question_par_categorie;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_reponse_par_question_par_categorie')), array (  '_controller' => 'Dex\\DexBundle\\Controller\\UtilisateursRestController::getReponseParQuestionParCategorieAction',  '_format' => 'json',));
            }
            not_api_get_reponse_par_question_par_categorie:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
