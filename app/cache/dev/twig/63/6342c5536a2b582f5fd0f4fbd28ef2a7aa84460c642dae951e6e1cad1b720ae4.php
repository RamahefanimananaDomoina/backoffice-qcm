<?php

/* ::base.html.twig */
class __TwigTemplate_47e5594a2b1adfa72f3642be0006dcfbc25f606da2dc22c2860681ac05440947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        echo "  
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/css/myCss.css"), "html", null, true);
        echo "\" />
";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/me.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"https://www.gstatic.com/firebasejs/4.1.3/firebase.js\"></script>
    <script>
// Initialize Firebase
        var config = {
            apiKey: \"AIzaSyCivjrQFNOfG34OastuCXJ48r30oj-Me7s\",
            authDomain: \"qcmapp-4d7b3.firebaseapp.com\",
            databaseURL: \"https://qcmapp-4d7b3.firebaseio.com\",
            projectId: \"qcmapp-4d7b3\",
            storageBucket: \"qcmapp-4d7b3.appspot.com\",
            messagingSenderId: \"337461332108\"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '130561684208371',
                autoLogAppEvents: true,
                cookie: true,
                status: true,
                xfbml: true,
                version: 'v2.9'
            });
             
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    console.log(\"qsdf\");
                    console.log(response.status);
                    // the user is logged in and has authenticated your
                    // app, and response.authResponse supplies
                    // the user's ID, a valid access token, a signed
                    // request, and the time the access token 
                    // and signed request each expire
                    var uid = response.authResponse.userID;
                    var accessToken = response.authResponse.accessToken;
                } else if (response.status === 'not_authorized') {
                    console.log(response.status);
                   

                } else {

                }
            });


            FB.AppEvents.logPageView();

        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "QCM";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 83,  169 => 16,  166 => 15,  161 => 11,  155 => 6,  150 => 5,  143 => 84,  141 => 83,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  60 => 15,  53 => 12,  51 => 11,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    {% block head %}{% endblock head%}  
    <title>{% block title %}QCM{% endblock %}</title>

    <link rel=\"stylesheet\"  href=\"{{ asset('bootstrap/css/bootstrap.min.css')}}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('bootstrap/css/style.css')}}\" />
    <link rel=\"stylesheet\"  href=\"{{ asset('bootstrap/css/myCss.css')}}\" />
{% block stylesheets %}{% endblock %}
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}

    {% endblock %}

    <script src=\"{{ asset('bootstrap/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/js/me.js') }}\"></script>
    <script src=\"{{ asset('fosjsrouting/js/router.js') }}\"></script>
  <script src=\"https://www.gstatic.com/firebasejs/4.1.3/firebase.js\"></script>
    <script>
// Initialize Firebase
        var config = {
            apiKey: \"AIzaSyCivjrQFNOfG34OastuCXJ48r30oj-Me7s\",
            authDomain: \"qcmapp-4d7b3.firebaseapp.com\",
            databaseURL: \"https://qcmapp-4d7b3.firebaseio.com\",
            projectId: \"qcmapp-4d7b3\",
            storageBucket: \"qcmapp-4d7b3.appspot.com\",
            messagingSenderId: \"337461332108\"
        };
        firebase.initializeApp(config);
    </script>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '130561684208371',
                autoLogAppEvents: true,
                cookie: true,
                status: true,
                xfbml: true,
                version: 'v2.9'
            });
             
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    console.log(\"qsdf\");
                    console.log(response.status);
                    // the user is logged in and has authenticated your
                    // app, and response.authResponse supplies
                    // the user's ID, a valid access token, a signed
                    // request, and the time the access token 
                    // and signed request each expire
                    var uid = response.authResponse.userID;
                    var accessToken = response.authResponse.accessToken;
                } else if (response.status === 'not_authorized') {
                    console.log(response.status);
                   

                } else {

                }
            });


            FB.AppEvents.logPageView();

        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/fr_FR/sdk.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
{% block javascripts %}{% endblock %}

</body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\QCMV2\\app/Resources\\views/base.html.twig");
    }
}
