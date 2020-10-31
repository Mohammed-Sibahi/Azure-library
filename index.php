<?php
session_start();

if (!isset($_SESSION['email'])) {
  header('Location: login.php');
}

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/11.0.0/css/fabric.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">

  <title>Microsoft Azure</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item welcome">
          <?php
          echo ('Welcome ' . $_SESSION['email']);
          ?>
        </li>
        <li class="nav-item logout">

          <a id="logout" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img id="logo" src="https://i.pinimg.com/originals/ce/af/83/ceaf8384322af790486cff176a0a2f24.png">
      Microsoft Azure</a>


    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link-sales">Contact Sales<i class="fa fa-phone" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-search">Search<i class="fa fa-search" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link-account">My account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link-portal">Portal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link-sign-in" id="sign-in">Sign in</a>
        </li>
      </ul>

    </div>
  </nav>

  <!--nav 2-->
  <nav class="navbar navbar-expand-lg sticky">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">

        <li class="nav-item-2">
          <a class="nav-link-overview">Overview</a>
        </li>
        <li class="nav-item-2">
          <a class="nav-link-solutions">Solutions</a>
        </li>
        <li class="nav-item-2 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbar-products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">AI + Machine Learning</a>
            <a class="dropdown-item" href="#">Analytics</a>
            <a class="dropdown-item" href="#">Blockchain</a>
            <a class="dropdown-item" href="#">Compute</a>
            <a class="dropdown-item" href="#">Containers</a>
            <a class="dropdown-item" href="#">Databases</a>
            <a class="dropdown-item" href="#">DevOps</a>
            <a class="dropdown-item" href="#">Dveloper Tools</a>
            <a class="dropdown-item" href="#">Hybrid</a>
            <a class="dropdown-item" href="#">Identity</a>
            <a class="dropdown-item" href="#">Integration</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Internet of Things</a>
          </div>
        </li>
        <li class="nav-item-2">
          <a class="nav-link-documentation">Documentation</a>
        </li>

        <li class="nav-item-2 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pricing
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Azure pricing</a>
            <a class="dropdown-item" href="#">Azure cost optimization</a>
            <a class="dropdown-item" href="#">Azure pricing calculator</a>
            <a class="dropdown-item" href="#">Total cost of ownership calculator</a>
          </div>
        </li>

        <li class="nav-item-2">
          <a class="nav-link" id="training">Training</a>
        </li>
        <li class="nav-item-2">
          <a class="nav-link" id="marketplace">Marketplace</a>
        </li>

        <li class="nav-item-2 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Partners
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
          </div>
        </li>


        <li class="nav-item-2 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Support
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
          </div>
        </li>
        <li class="nav-item-2">
          <a class="nav-link" id="blog">Blog</a>
        </li>

        <li class="nav-item-2 dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Azure</a>
            <a class="dropdown-item" href="#">Total</a>
          </div>
        </li>
      </ul>

    </div>
  </nav>


  <div class="container">
    <?php
    if (isset($_GET['message'])) {
      $message = $_GET['message'];

      echo ('<div class="alert alert-success">' . $message . '</div>');
    }
    ?>
  </div>
  <div class="background-image">
    <img id="background-image" src="https://azurecomcdn.azureedge.net/cvt-911d59d47177e0be4c1f9477b7f8e63f93dd4961c139be231f6a0232773dadc4/less/images/section/developer-guide.png">
    <h1 class="background-image-title">
      The Developer’s Guide to Azure
    </h1>
    <p class="background-image-text">
      Develop on Azure from day one—using common app design scenarios
    </p>
    <a href="#" class="btn btn-primary">Download the free guide</a>
  </div>
  <div class="image-1">
    <img id="image-1" src="https://azurecomcdn.azureedge.net/cvt-9da387a793bae9e6f7c9284d9a1d572b1c45a5e64a9f2276a9d555897687fd0a/images/page/campaigns/developer-guide/ebook-pages.png" />
    <h4 class="title-1">
      Develop on a cloud platform that’s designed for you
    </h4>
    <p class="text-1">
      In the latest update to the Developer’s Guide to Azure, learn how to get up and running on any project in minutes
      with fully configured, secure, cloud-hosted development environments. Discover how to get the most from key Azure
      services to help your organization adapt to rapidly changing business needs.
    </p>
    <ul class="download-options">
      <li><a href="#">PDF<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
      <li><a href="#">EPUB<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
      <li><a href="#">MOBI<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <h4 class="title-2">
    In this developer’s guide, you’ll learn how to:
  </h4>
  <div class="photo-1">
    <img id="photo-1" src="https://devteam.space/wp-content/uploads/2017/09/image003.png" />
  </div>
  <div class="content-1">
    <h5 class="title-content-1">
      Quickly build, deploy, and scale your web apps and APIs
    </h5>
    <p class="text-content-1">
      Discover how to use Azure App Service with popular frameworks in containers, or running on either Windows or
      Linux.
    </p>
    <p class="text-content-1">
      Learn how to use deployment slots within different environments. Take advantage of continuous deployment to create
      a build-test-release pipeline. Use Azure Virtual Network to restrict the exposure of your resources and services
      to just your applications and not the wider internet.
    </p>

  </div>
<!-- This is another change --> 

  <div class="photo-2">
    <img id="photo-2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPwAAADICAMAAAD7nnzuAAACN1BMVEX///8jPGXrX0brKgmxNyD9cVbxw6n/5238vLKEg4uo2efop32Ih48GLVy7v8j8//+zVVCNjY0HOmYAAACmJAx6eYHCXUypqa1KSVHIaFawMxl0c3uepKmwJw6zt73draQ/PkasIQDv7u/x5eBjYmpqaXFUZXNaWWA6LjV9iJuf0NilrLwKMFsgPGGHeZAAJ1ws/gDzYEMAAB6JgZDe4uRsqGyr4On/+/9R1kDnYElwfZTNzc2Oi4uUoK/qEQCneHb+1yAAABapi3nMWVD/5G/7aEXuya77dl/1WjjAnIyYhoEkOmhNXXr4/fXWZ1nweDW7NhnXUTVtR1/84+HtiXjxq5PwdWDz1skoNkToY0Ntgo350s/3w6ieWF30tJEAN2yDTFjZXUgAJF3hw73Xm5PDemrxgXDuNR/vnY3Gh325RTXHgG3xwbSzTTquIxjUr57rQTDxqU3401zsYSPzsKf0kUD87pv+6IH78GbmVR7AamLxgj7wlYn64uv0y5vu/eyX+4P88eH4uVmeeYNfxFd2nnn72WH64EvzmjP5yC3/30/53A63cXL5vDJqsmVfwVh/kX3l3a3b18Ht1pCdOSyHNzlvWGyaKjyzLi5rRmhIPVyENEa+xr6dRUJxO0D7iHb5oYd2NE89PFlcQ0YnPkBkQTmCST+UWGH/3s+AaGYiGSoUKjaZWEqBZ1mTblpMSUNWZoIxSVjT9/86HiTHmJnOoImeTlvZiGbPc1VQYYoAFlBEP2YAAEoiJ8ApAAAfg0lEQVR4nNWdi2MT15XGZ2TZGIg8RgkOKHVtS+HhWFPtgIMzNnYCRpbMWAlYsixXAmEgxhARk1RJCHV3l6aPbZN2t13ycpbatQmPNGloFkgC/eP2nDsz0jzuvERkeb8EPzSa8fzmnHvuuU8xzA8vLsVEIqkUBz8xDH6r8TIMx3FM6mo6n8+X8vnpqyn8nVx0Q4qLnDn7aoe/hyh08cr5M5HHuNdUujwnjGh0LjufT3EbDR5NwjFnzl/o6ekMhfyKQqFOeARXuiLEWl7uGa6WymfOjYw0jTTpBE9gtgzXS+HfrBuOZ02/FgJwv1mhnqd2dnmx1wA8ysgikltoJFvCh71B4LlU18UeGniF33/+qofLReasyWX7XyptFHTmzAU7dKKezvMufZ+7mrVHl/nPlbiNYPtIhyO67P1dLtg5bt4FOrG+L9Jw+NRZN+iy9dvtYz8eS19yhS7jTzW02oPIdLHTJTpa//UFm9sFN+amXKMTfDG8jrAmdbk2u2L8V1PWF+NSc57YseTnG2T8AY452+MJHenbw/ScbwDYRY/siF/iBhoR+DjmvGd2v7/zQsTichGr4j4ih8ARaiQcKXANMD7HvFoDO+Z9dPqr56zQX3njzU2gI2++8TMK/0iZG1hn9JrZ/f5jFyh1FMdcoqM3vfWbTe+8/fbb7yD/pt/8nOr56w5/3mOsq6rzoilIW5X3kZ8duQzoRzapuvzmu6Y3jkyvL/kAt1Cj3Qn9FZOtMnT2ty5f1qIT/dz81nVNd7jUNLUR41Y9Z/V3y5Xo7L+8vOnttzcZdPkt45tHhPWFv6Bpufa4lOZx9UzrbjdNQ28aeePypnegrB8x0ptsP7K4jvSctpILdUUc9YtfRCJndL6iTXY4kcr+itHmqo6Yyv3I9PpV9nkt+0WbjDVdhobPv3LMv/07ZK8dWtO/pnlXmV7BW7JvetP0oJLrVNnDX7moNeJFm7fmAf7qv3IDAM8wWnh/T0SxFcel6E7/1mUr+k2XXzGZvrxeltdl9KGOsAv9IhzmdmrhQ+0KO8Ms0g1vLOpavWk+xabR8EOK8+tKb8fT213pRzp4f88ZBT5Mj/SvWBt+05HL75reP78+7F36Kr7j6c2uZIAPtSuXoxt+5Jc2hqdUd01N61Pq9YYP1QgP1R1hZ6g+3zRix37k8i/Ned46lHqOOaM3PIF/70Wi97zAh14lQxCt9BL/ro3Xo8xnJevODq34VzvN8B+8TPSBF3j/U6R5Z9GI/5ln+HVI8bnwU34j/H4t437X8D1dUNtFLBrxdvEOZRzOwDSv/vAGryeW37/NBL/NGT50BSp5iwSn6ef27BT4pkt1L/TcFSMCwv/qXyp6Xv72a2d4f88AZLYW8N7dvmkkUu8cN+WnwG/e/BNV++E/lAu3J1W9Vbfdu/bsv6HB1z3eR4zteAL/hKNo8E+dZW5b9lnaJXibNr1Bg5+rM7uxopPhn3h2h4P2PEGBD3UwVkW+aeRNG/Qjl1+hnXOp3nnOeeMgBbH89mecRLO8v8eiB6fJKcP7Lf2ceuf3xnj3OG7v7wlTW/IE5A0b9sv/QU+Jp+ts+QtGAAL/zLNGbd9Fvqq/7qK5PbRrLfqrQW/ZGd7UrpHhS/VlZ0wAdPg925/dg/B71Bfo8Gcs2UdsKvrf0g0P4b6+7AOmTlu5qjO7uRu37+yynn5h2Ym16aXfWZ1T32YtZ6rplIBHtNmmNU+FD71mbXkq/BHCTnd6OCdT1zJvBb+L1GfPeKzqAN6r5Y/8/v3fmYctKvD1ZLeEp7u6o9uHXvUK/9L7v7dkb5Tl6U0Zp/TW1vLmgHdk0+9fsizvjYPf/4Eoii/XAH/WekTeXNUB+vt/sGGHgFffet4q2rsQLdovuIUnVn/pJVv2uld1jPH+ZXhsye0nUr7tN/dpUOt5yyTHmOHJ7Ofs5+fVO8npoKW3+//4wgsv/Or5F1D/+Ufy7Y8memqGZzkTRZ/bH/ktsv/OOh+Uz6l3R9arVPhfPw/6L/zy/K+Vb67gbRo22lbdEWL3l6zq98o59W7YnKW16oib79+s+LvyjdRvDg0by16sphFte57Y/SXTGJVR5+rdk0Ntz29+ZpdRm8nX7ZXfqe35K0ze2vKX1bFp2efft0joNadkG9OTs2uPUds1X0HP0jowO7ushiyA5N13jqgZLbG7XQWvnFKu+6DNRWofnlVeJ3/b/wS1zPekGcayQX9uaOhPb1cN7+z0TSPpusMbu3I0DRvbdg3N7a3H5iFbG0L96bKM/v4fnCconqszuUW//eZnu+2U6+jeQSnznec5SBmt4BcI/FDbn/+b0DvUck11b9agBoxpjoturCsCNdrLE3N8dPpLQ1X9+c0/WLdmqvD5usMznLGy63h6u31e+2JSOAolQwcfCh0LyVM66AOVI/Ma+KGzbubg13/ABkJK2uD3F4d+bK9ZMXkPvo2T5DDkP+73X7v+4Yd//etHvajhjz/+5Ng5o1ePdPX3V9j76bMzDWesz8QUQwdu6EqXvXyikFno6hKPg70vfDg5O3trcnLy00mNPoJ/n338CXkCio3PnenvV/nPuJqNfXU94LlpY8jrtNUx0efzdfYcg68X2WBwctYnzAgU+WbbH3z2sWpkEu0VfsscWGv4OjdnKzI1buwU8hEdl7+N+gSftQSxo2P0wusyDgn3iB9x5fXrg86B6b3Qizq8GRt2PA7/jy59do7Y/n+G2tDpbXo81t/wA8xr7hfWhPz2tHrN+ERR9Il8cOmTJojws+fPnj3uarXVudrX7HpVJOTO9J+EQteu2/m5hflPSHyQ/bCJrK5wt9BsHaefmtI8Cx27Nhmc9A4vio8mAV/6zL7jRsNel4nHZL4Up36rrF/lmA+cHD9E0Fm+eMI7vG/2RHuR5aFqcIkvpNS75eTblPWY7RxcwB6ZLrWWy62l0nREeQa4sOqCk+Mf8/9FkqTa4H1CR5EF8UH+Exd2H4modwsp2HS+VCrl87cjqcdaa8xx6daMmATJFXFSSIqZUhof6AClD9tg9g/hznleKt6qAV70jQZ5YJd4Prj6umMnRonsMxDOTy03C/F4XL7buJBYbE3Xwg/XSk0vArjxzoVkUsQV/Ix9fRfyTxZ5tB0rnarF8j7fJDE9qBj8jDLzSstexjXnrcvN8Waj4vHEYt77guNIWRSEGZFyVzPwAERcwG8T9NDsyr2zNQQ8oiXlCjxf5O2Mj0vLSstm8Ap/tmyxko9q9RQXWbRNxDAXWYwAPd32YPYKOs+vztYGP8tK6kWk4GfWw1plrjUhWKHL/M0rV11aH942n0w63dqMkJyHCu91Cnro2mqFnYWI11Gb6ZPtQb5ymeISPeyPjJTyzfboRMJK2hU9V4IUm+bvBomCbzptnJRHXB7sXblrCFo1Wt4nBjVXYflPaPTnytYOr1WiOd7qvHcBF5lz8HitcTKRDmML79hfNOR420s1lnmfoL9Q8GPT0pIR34obckVZx6I/LXi4VzS+fu8ALO6S/p5rSG8V+Mmg7ikG/2q0+9yyB3bw/ZK17SFz4crVO4Wn4OJBJFsjF7XGX9LdMMKP1sju850wXCs4qbO7eDLriR0i3zzU4HR8yIgW1UAniKPt16+3j86KDvxicpHr6lRy3WP+VYPdWXa1ZnZfu+lBTlZq/JGm0rRHdKRfZgbo43lcak5QyL9c686hbuTWbtp3P2DBZ1Ljnej8oWuPWN5wv9JkvFZ2YdQILwWXzinoUMHFLQAtXkclmrMDVMtzXAYpoUV9E8n3fr1nzx784cbno4Jd8BeBnkl1hXp6Lqwa7xaMVVNqL8OLxicJ+EA/MnKpzDFW7EJrftHO+FR6LiX7vNC+F8jv3Cu3osr37sCvN+3vMpnB5ftnzq9K5rsNtjt03VgKHjgFXtp7aR4Sdmu7Z6FF4osnLOHjc5Sgx80nyW1ev5HrPtyqUdedXPfarM/G+GIS+5C4QclY3lnHeEeuSv5upRtTE3KXzNfji4MYmvPUxCaRvl3GdlepnC5b0gvmtj9XQrvPCF/mbuzpatXrXneu2z7wHYd2VW/AbCgdvA5M8xoSi9m5TGZlZWpqamWuenCSckE+MMxwabpRWytdDxxnXQvGp4z0aXJfAtj9TqtJXd25NbtiD6a72hejOL0WPlsoTGVVfrkSzc7NA+78VKGlZQz+IxorOMBLgb6URR23jDunEH4uHbeEb47nDav3s+SvzeZo7AWkv2kb9ZJXzLFOhu+osCPh1EpmLguay6xMnSwUFGC9MqqXATylIAH/eToZlHcweh49H5I1a/jmZt1OC1Dg8a+JX3fvMLMTz8/lOiy4ielHaVZHFdvld4gFxbAo8g2/0NhbWgpKa0D4lArPSzzd8otpSGHmhbgwDQ8hb5P9xXWTFdOXRGymtuf2Gsu7qju5NbtST6nkFHi5qhOmFNACnVensSmlbExSDQ/utFQFSVQC+xwHXh9Giy9zTIq7amN7dHxlEfcAR7KbGXGN5vRKsd97wzpuJ09ZsSvwMz430FVl5Sd2qmhx1eAthUIoVWu9ZUxdU4i2SEq9reMPVLpi80lSnjtyOSvDo+lvWple6DAltVV40oslzHliV0wvnLK6rMTvJAZsTqQ4LhJXWvTLaM9WId6cBnuWbRP/eHVDNbl2EW7m1izZW7ty3UqNbJAoiCw10MuajOODnfIE31LAUijGJ3kLel5abW6eTpcXMW5ztxfLkTyaP4H2TE+H0e5JO3Z4q1ripy/J8Gu5F63hW7tzdL8XhVNBG/hVfM+sN3aI+Gj6l+nBnpg+eOu23DVPNpeFH5B+masMMETs2SELllN6OacHityNszbwd3LtVL+fgfaHNTup6IXMWEGtx10J/R4MbxlJ4GHHhlLYha72zXOluJLkyP8wyckmEgnLPDebIiU+rYwez+a6y7bw1+lFftWaHNPRNWHGt9JiivMF6o/qr+D3grYPj8I/oQQspezOYUkulTI4z6e8Mr0Yj5PefKYUtzC9nOmU5XDnG7WHf4/evhGuFy2dk9gI4r0IRX58ba9OdxYqtHe+1h1ZOzpWGJvziXbPFBRow5uPlEryRlsY3xKCEIfCDCUA27VkpgYXtoBvJnW9nNwR+Jx3eHHG4R4lSPKEQsudQzt26/SPQ+MFVMvCF3/TH9n9t71jhSmb6lMRD1VbHjFJx+y00n8dXykvV+FAGQv4uBwXFY7ZG7bw4PaUmQWC8z3y3RcP3zk0fMCg4S8OE+3dvWWL/siW3WuHX7z2kZ1DEdP3MQyhwMgNJXhM8WfZ1IKyupKbtvJ7LBatKryYy92zgd9DC3jCrBM7yz8JOrT7wBajdj9JtO8505Eth/CAE7zEQojHgBa/KndIIFIi3UqGraDppmwRyJUF8oRKtw30K/B0MhUS+6pu7w1KB7wLw7MI8sVPzfA//YIc+cLMfmAfHok60EPzTs7ihLQMD0UdigCXKmUSy5VVtQNcajqTzZRw2FUPnwDLV8xpn+Tcy30tiCa3nynaVXMO8MS+hyzhFyYcbc9kwcrCMhmOyM8DEHbyDJD6X+2n5NRtyE308QgTSapN1ZlRz+mtYOxdNit6dPzwl19R4fd+BVrbR4P/6u9fjhcmnK4daLu6LAiZMHFueAwJp2GJtLbaj+eZ6Qq8T+i2adjkumkJnoPZQbFSSyHbso8Kjy38ryjwW568X8iMtThann0EVVlYTnMSJMA7rDPhtKE/XmZaNX1mtk3azykl3tSzTlFLy1R2wQq+xQJ+fAryop84wseGdFjxtC05x+R1kX+Rmdc4s7jW/TWd/TAYnpLcfuTMztcIn2lp2R91unhgsEJG+q1sV1QCvL5Te5lZ0XRPCZDhUh3/7N7uHRSnn7VuylYUhVyVCv+NNfyBJ8fnAf4Zx6tLUXUfVaVCs9/72pDtJTQ1HTbQvqR24t3DFQNrpg5c4ZZTqEfjQBrru2+GPwDwpQIV/sA3h8a/XRkrOJd5THQ4iHXZfFmu8fVT7vUzEoxe39zMZPU813O5PcY87+gNslzC3IG7at3mrKh4sNAiTlGi/Tc//Rwt//dDZst/8+T97MpYi+O1wfR3IYRD010Q1ACuY9dNyHKER9t3d79Y0rr8jlxOXixy5/BOXRcuZHfO8NJEy1h26s4/9PAHDnxz4B+Hsf02fmjYZPi+/y35ploWAi7oA5HIVNWPmyMVUGjfZBLNiYxmaiZ31WeENzizMNoNsOpwVdd7a7nV7psEfte2bdt2auarCA9cxHqeDywUslMtX+ze8lxFYNstz+3+XG7TfbVv+DmttmwZ3ne/IBQKR6168HTXb09W6+5kdTiCS2VkZxAymkHpctwWfsYn+K6TEdruHTu6yVjtzVmhIyezA739aJJZkrR9LANm/PrQvooOgfZ9dV9p0f79C80hPLh3vKXsayk86+xWLBv8tFpvxwuVjjnNiE18uUrPlQQtPjNHaan52te6b5AnkFv7chZngXfkntkma2clKZp1YxnEbylgx/X98XG5GXcYfxivNudbWhbGqzo8fh+HbTItpaiLcAqepRo+06oJb9xUFVI/PFWq5jkJZpHWNyUIvtGOjvaOWdEXl4cRr2xTpdpeaC+6uDkW4708MlPQyNh9oz8GKrUcdazliYI7ZcKSLrSHdVWaJu/Dvh21TzvLTFkNQ5EBxMovV7YdVOmvyGc4N+hU+KMeeu8UjbWMuXuybPBEJc5r6HVxXVsH4BiuCr/MlByn3BGJR6v0StRzU9GhJLbFU+8lYS/cc2d4lp1UAHV1um74Pt7K6I6p8PNMPulm9sCMAPR6z59xaXhIw47SRyRt5dikk8VLwZrhW5nIuy4mHBLbH9TZXjTNmLFW9OD4eKHkmruwsH1hl8uAAn7/spzb6T7cQTd5wcLt49MM55Zd0Hv+jJtavnKDAdaT1QMBu3EQw7WvEJIxXcBLaQNes/axcFyr+kwiDEcN9zR6Xbm/krQeUqCpOO7B8AGX0USGVwYtsaeqijhPr+q4AajqEmpNBxWf6+lSwqyG/jtXKU71Fne5N/wznh4r+5ECKSRaK9bnmMqcXJx7V6EvaGYp4y5iES/zTTVRz9MNgukXnKlllVw0lLV6pJqyOV5dTssNZGT6eEbjEGXN8CV2XTPcnN1MKyO9GvUOeoTni9tdhryCy+ymoqIGqJrOcBw2bJpXNLVASt+eR3/gWpOu4atR74nN3szDS7ExVxMUCi2861gnK1ht2eiatHKnrbZNq0t9VsjhsHu3r0a9J7Z7g2f54HZ38Aej3tihrqPDk2FY7SR7HbyQl8ezM87QGslR76BzH5NR0QUX9IWSR3Rw+yq8YNt3jXM4KsoqL6bdZbgV62PUO7jLMzw74cby2z2WeJzwVSFy2hJusUKvZn0pML2nCbIk6t31Dh/d72z6o266b/RSmjZoeKeFNOnKpNxESs58OFxe4YFejno1wLMxx/ZdDewaeMe9ACuDFvFK43+A+9Z2eqWJHj1/t/e7ZCVo3doYv1CohV0Dn0hzmrkaOmo58leHqzSVgJdEByXMfvCRtzRMUWDiTMEKv9RysBZ2DbxMzxiXEJPfB3BgI6GU+bh27zjOZau+qqTlHDl7FfmnreAXJmpi18IT+lQps7yobeHml7OLpRSnGaY0lI85Z1697d3245gU2G3O9NAbjkZrvKIWvjmbLhHz+tTJCanK5ATNEK1uY5UUc9VpJZER/lat8Ozp+yfNxi8cjtV6PR18s7qcWLgtu34lsxEqHbcz+o4PeEjTSQ8pvstOe7qi97duNeAXTm49TF2rUAO8wbXNqw7i5t2EuLI3ejej0xbwW1EnSeAj3bUn8ff7rrtujCrupMI3kzkL5qmYcfOHnkBALLtv4Ph8M7XD8wQW+YnUX2q2vCa91UqQP7ezZGSnLTACzXugFzpqhp/YStNJz2mtqiAdvjmxjEoY2emf4zqgrLdwJ+c5aBaSdtHhXXbXUuA9rCqNL9MXFeKiAyj3bgu+655rWTyKrC0vHqXCb70T5K1mmDvAu2cXMnSfl/lL7hdRe7xFScJldxIrFQ/T4Q8XWQkfkOeiz7tnt938n+PSxiFrK7kbowW7aIVwWNPRdD+KPR5F7dvd/YWPnKkVlRw2jyGrSkUXvu+U4klkkx/+01MnTrR3jCryd/b09Jykw5+85vdfu4jvam9/8ODBrVOnJpdWpWCw6NCPXVlv46B4Nu24axDHTWddjWA51HV8UFq6PqssmVTPCT0ForNvPemHY8fVNYeKxNEHS7bT7nG1riuPj7c6bx3G4dqFkugU9kXfJZu6Dpw7uHRCJNA6HxI7AdD/LRX+Qg8cE9UzRPm7CM9h1LgZgwF+p4sNQ5pXInLLzllcqlUE61v6viAkxVbmtKVFpCJrtXgazdvj/07PD5nOd+gTTx2n/7mOVUvfl/hoqpR1wBfm3e2VotBD3J87bmH+maQviy3Eu1YJqRQ8Zd1MOg6MUPJDHd999+233279FvUdsfpTfqunLfhO8JZLNu+CrfLLoiW/kJgK42IcL/T4acJzAm4PNUN2FPDJzgivzJUjpLtkmJ6Q8pK6hNQGH8yvlS06/l1h1IKdLw6T28XtoXTzbYjiQmL+ttxF7QGePAB4XtPlzCzuhyXLJ2bK02G1umijNkJ5KdjusFOESOKeQcdtKxhRmLXIAJTpt7gx2O1yJtEcl4UN2Ox8KVLrzmgDA/IirXAknUelI4yyx5bS8UmHL96yR0eU40Z0O7Ortqc7vlSBGyBPIDJNbjYfiaTkVWY1sTuL2oErPXKTH4t+vdldnCKcoM3+Cg4632dd1EczfZC+9NCsKr67LUJFcZXysAM/bhB8vxke8lc3+2oRGPB9rPZDrtvRtLQqZj/Puo4yT4vmi5MeOgX8joFOJ1or+m6D0FNMn6mvGUK9axaCL9KXZlMlLJliXqBtfT5+m6JwwGh6PljrBnBu4E09xlKgYV4P8d7Y9yQt1Y+dUuijjYr1qDaj3wdr3O7TnUyFvrrAqBEyFkLXFV1NMm2WNdFAdM4U8upZ5KHQG5bqNzDcERnbtZ4GPjzD67dM4ouNJAcN601f13hn7DrDNeQNVVgX72vZ0twLvH6AUGqoz6N0pn+Mrf9cSVfXNdzwDDegs3xdg/2MqKvreKdlw+ugH8e08LXue+hOYrEyqMPH2hpNjtI0b+pb0/lwBxX1j0mNatLopWnZButZ0aEeVeblBvobzY3CDSArxbDO7MKS2pGHm0E2mpwh3dzKzp98sb7VvCbLkVim8dFO1lBsXap5DXxsQzi9LKWyr2+bzldN8WLDjSbWiJsggajeOQ5+ug+UMD66MSK9qjCyS8EH9Ya/jpbnVxvYf2NSf1tbL0674E+111mnsJ4PDLe1bYgyD/VNGx8LBOT2TbDeksNdNBCISX2Mp9HH+qg3VvOktMcRH7vb+Nz+xw+9TyH6YRRrZO8lEVfb9LEfRKcbXfCHrOdn1F2xRjfozYM266dAb8PhG+f2jYfX9uFJQZ6VAqcDKIlsRY+KBVj4R0oH/AY/x8jLrBRTzuWh7orKp8CL5CgeUd+HNRuehHuJ6iJMdCPB84/ahVtR8mmqbb1RyHm+75c10dY/jJs6Rnv72x62ya/1xQb7lYktUmBwKMz1/4gH0AlycGgwwPLKyYOBPvkEnl/1zU7yGxQ+2D5zaikWlqeC9E8Uyfgxzg2Z6GXCaHo4NvywX35t6PSg2g2CHVIcZKzhCYmdwNklcFpv9Hvl5EHSX8VhR7F0qt23YeFnrxfZQJiZYNnBfuzUvsv0R8mUxCgwRHGTYg4bo71kEkNUhQcGrjcamxiCU/gJeEws2wdf4c0BfB8+m2GJvZuCtmPwUXJp48IHCbwkBaP9cK8A/5CU/0Ab0xYjXwMAP4iFWVLgJQn8ofc0ssB3QA6fZqUow7Asw/2TlHmA7w1gvdYWYP8fwMufOTIUu8uEh1E8bkwNSGh/gO/D1+6q8Oz3DBclW3cPM22nAf6fsYfgCwGe4eSTEf5hDDIaqFYfxZeqMW8DwUs8Lz5Q4VmCdlfpa4KQho4wyIRjktoH0xdQ4Hl4RDGl5uqPgbP390P57zutjsBOAHy4v5+DIsOyS8klaUNaPngKP2RNgQfLI3x4ED9inidg/xxC28Fj6MPXKpaHYi7P6CPOMiEv/oTLwk/yyTF5LHYIL8uLo9V9FTYQPM9OYi8TKfNsVFPmo1Go/SWGuYsFGeFJmVcDHs/HoDQEMLDhKd8z4YfRKNbuEPerZf4hhAuMC+xMx4Ys8xLLzypuH4jehWiPU6X6H0YDJJdB3yUdnRjw4IEEigj/kES+YbBx7CEP72Cl75UywGLAw8NRCeFjvDwH5lFyVdqQZb4S8OSPRJ7Aqo4h2y9PKAMsg0EJLU8+j6ENW6T4Q28wMASVOFb/dwMQGVX47xn584gGT0NVFysOkwHh1eQSuxHdHqM9Wr4/DOrvY6MQ48OysLTGhsL9Aczm2uTXAF7+AXLBQC+it00EwdnJu1DwEzkO8OFefGjh4QAGvA3p9giPQ8gxyMNjsSgupuLxJ/id1AWxAG6DIrHkcOx0AJN38k5cnICvyBYPqF4vnZaPS3w0hp6OxT+4ceGL7TMPPuVJ+qb4Jq8sp5OLhRoZK6+qB3le+0bj+3j1VF56MCpu1PSW5dt9t+rYt8GvirPa7cg2FrwUDHrc18qTpGJQt7Kl8fAN7MxoPHzNi58fXw3vyRmqebeHxxY2nhorroGWb/w4NXWtyfqwN3zQAtLyxoQ8KfD9RpiX0sfK3azrq+jwRmBnyBD1emvoh0D/P69TRsSqIWXFAAAAAElFTkSuQmCC" />
  </div>
  <div class="content-2">
    <h5 class="title-content-2">
      Meet all your database needs with secure, enterprise-grade services
    </h5>
    <p class="text-content-2">
      Choose from a range of database services to fit the needs of file storage, relational databases, NoSQL databases,
      and even data analytics solutions.
    </p>
    <p class="text-content-2">
      Find out how to identify the right Azure Cosmos DB API based on your data type—including documents, unstructured
      tables, graphs, and blobs. Learn how to use Azure SQL Database with your favorite tools and how to choose the
      appropriate service tier based on your requirements.
    </p>
  </div>
  <div class="photo-3">
    <img id="photo-3" src="https://azurecomcdn.azureedge.net/cvt-a9909bf1d24cf73951d08ee89dc9a776ca1b06c741dccf7d433c05247a7924d5/images/page/campaigns/developer-guide/iot.jpg">
    <h3 class="title-content-3">
      See demos and real-world apps in action
    </h3>
    <p class="content-3">
      Explore step-by-step demos in the guide to:

    </p>
    <i class="fa fa-check" aria-hidden="true"></i>

    <p class="content-4">
      Create and customize dashboards in the Azure portal, and then share them with team members.
    </p>

    <i class="fa fa-check" aria-hidden="true"></i>

    <p class="content-4">
      Create and deploy a simple .NET Core web app and database using the Azure portal.
    </p>
    <i class="fa fa-check" aria-hidden="true"></i>

    <p class="content-4">
      Extend your app to perform data analytics using Azure Logic Apps and Cognitive Services.
    </p>
    <i class="fa fa-check" aria-hidden="true"></i>

    <p class="content-4">
      Set up continuous delivery with GitHub to automatically deploy changes in a continuous delivery pipeline—making
      your apps more robust and easier to update.
    </p>
  </div>
  <div class="card">
    <div class="card-body">
      Develop on Azure from day one—using common app design scenarios
      <button type="button" class="btn btn-primary">Download the free guide</button>
    </div>
  </div>

</body>

<!-- Write now I'm working on making it responsive -->

<!--footer-->
<footer>
  <div class="row footer">
    <div class="column">
      <div class="socialmedia">
        <h5 class="footer-title-1">Go social</h5>
        <ul class="social-media">
          <li class="footer-item"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i>Facebook</li>
          <li class="footer-item"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i>Instagram</li>
          <li class="footer-item"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></i>Twitter</li>
          <li class="footer-item"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>YouTube</li>
          <li class="footer-item"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>LinkedIn</li>
          <li class="footer-item"><i class="fa fa-rss fa-lg" aria-hidden="true"></i>Rss</li>
        </ul>
      </div>
    </div>
    <div class="column">
      <div class="azure">
        <ul class="azure-list">
          <li class="list-title-1">Microsoft Azure</li>
          <li>Solutions</li>
          <li>Products</li>
          <li>Datacenter regions</li>
          <li>Case Studies</li>
          <li>Pricing</li>
          <li>Calculator</li>
          <li>Documentation</li>
          <li>Downloads</li>
          <li>Samples</li>
          <li>Marketplace</li>
          <li>Global infrastructure</li>
        </ul>
      </div>
    </div>
    <div class="column">
      <div class="community">
        <ul class="community-list">
          <li class="list-title-2">Community</li>
          <li>Blog</li>
          <li>Azure Updates</li>
          <li>Tech Community</li>
          <li>Events</li>
          <li>Careers</li>
          <li>Education</li>
          <li>Students</li>
          <li>Startups</li>
        </ul>

        <ul class="support-list">
          <li class="list-title-3">Support</li>
          <li>Forums </li>
          <li>Azure Status Dashboard</li>
          <li>Support </li>
        </ul>
      </div>
    </div>
    <div class="column">
      <div class="account">
        <ul class="account-list">
          <li class="list-title-4">Account</li>
          <li>Microsoft Azure portal</li>
          <li>Preview Features </li>
          <li>Privacy data management</li>
          <li>Download Azure Mobile App</li>
        </ul>

        <ul class="trusted">
          <li class="list-title-5">Trusted</li>
          <li>Security</li>
          <li>Privacy</li>
          <li>Compliance</li>
        </ul>
      </div>
    </div>

  </div>
  <hr class="hr">

  <div class="row">
    <p class="seattle">Hello from Seattle.</p>
    <select name="language" id="language">
      <option value="EN">English (US)</option>
      <option value="AR">Arabic</option>
      <option value="HY">Armenian</option>
      <option value="EU">Basque</option>
      <option value="BN">Bengali</option>
      <option value="BG">Bulgarian</option>
      <option value="CA">Catalan</option>
      <option value="KM">Cambodian</option>
      <option value="ZH">Chinese (Mandarin)</option>
      <option value="HR">Croatian</option>
      <option value="CS">Czech</option>
      <option value="DA">Danish</option>
      <option value="NL">Dutch</option>
      <option value="ET">Estonian</option>
      <option value="FJ">Fiji</option>
      <option value="FI">Finnish</option>
      <option value="FR">French</option>
      <option value="KA">Georgian</option>
      <option value="DE">German</option>
      <option value="EL">Greek</option>
      <option value="GU">Gujarati</option>
      <option value="HE">Hebrew</option>
      <option value="HI">Hindi</option>
      <option value="HU">Hungarian</option>
      <option value="IS">Icelandic</option>
      <option value="ID">Indonesian</option>
      <option value="GA">Irish</option>
      <option value="IT">Italian</option>
      <option value="JA">Japanese</option>
      <option value="JW">Javanese</option>
      <option value="KO">Korean</option>
      <option value="LA">Latin</option>
      <option value="LV">Latvian</option>
      <option value="LT">Lithuanian</option>
      <option value="MK">Macedonian</option>
      <option value="MS">Malay</option>
      <option value="ML">Malayalam</option>
      <option value="MT">Maltese</option>
      <option value="MI">Maori</option>
      <option value="MR">Marathi</option>
      <option value="MN">Mongolian</option>
      <option value="NE">Nepali</option>
      <option value="NO">Norwegian</option>
      <option value="FA">Persian</option>
      <option value="PL">Polish</option>
      <option value="PT">Portuguese</option>
      <option value="PA">Punjabi</option>
      <option value="QU">Quechua</option>
      <option value="RO">Romanian</option>
      <option value="RU">Russian</option>
      <option value="SM">Samoan</option>
      <option value="SR">Serbian</option>
      <option value="SK">Slovak</option>
      <option value="SL">Slovenian</option>
      <option value="ES">Spanish</option>
      <option value="SW">Swahili</option>
      <option value="SV">Swedish </option>
      <option value="TA">Tamil</option>
      <option value="TT">Tatar</option>
      <option value="TE">Telugu</option>
      <option value="TH">Thai</option>
      <option value="BO">Tibetan</option>
      <option value="TO">Tonga</option>
      <option value="TR">Turkish</option>
      <option value="UK">Ukrainian</option>
      <option value="UR">Urdu</option>
      <option value="UZ">Uzbek</option>
      <option value="VI">Vietnamese</option>
      <option value="CY">Welsh</option>
      <option value="XH">Xhosa</option>
    </select>


    <select id="currency" name="currency">
      <option value="USD">US Dollar ($)</option>
      <option value="ALL">Albanian Lek</option>
      <option value="DZD">Algerian Dinar</option>
      <option value="AOA">Angolan Kwanza</option>
      <option value="ARS">Argentine Peso</option>
      <option value="AMD">Armenian Dram</option>
      <option value="AWG">Aruban Florin</option>
      <option value="AUD">Australian Dollar</option>
      <option value="AZN">Azerbaijani Manat</option>
      <option value="BSD">Bahamian Dollar</option>
      <option value="BHD">Bahraini Dinar</option>
      <option value="BDT">Bangladeshi Taka</option>
      <option value="BBD">Barbadian Dollar</option>
      <option value="BYR">Belarusian Ruble</option>
      <option value="BEF">Belgian Franc</option>
      <option value="BZD">Belize Dollar</option>
      <option value="BMD">Bermudan Dollar</option>
      <option value="BTN">Bhutanese Ngultrum</option>
      <option value="BTC">Bitcoin</option>
      <option value="BOB">Bolivian Boliviano</option>
      <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
      <option value="BWP">Botswanan Pula</option>
      <option value="BRL">Brazilian Real</option>
      <option value="GBP">British Pound Sterling</option>
      <option value="BND">Brunei Dollar</option>
      <option value="BGN">Bulgarian Lev</option>
      <option value="BIF">Burundian Franc</option>
      <option value="KHR">Cambodian Riel</option>
      <option value="CAD">Canadian Dollar</option>
      <option value="CVE">Cape Verdean Escudo</option>
      <option value="KYD">Cayman Islands Dollar</option>
      <option value="XOF">CFA Franc BCEAO</option>
      <option value="XAF">CFA Franc BEAC</option>
      <option value="XPF">CFP Franc</option>
      <option value="CLP">Chilean Peso</option>
      <option value="CNY">Chinese Yuan</option>
      <option value="COP">Colombian Peso</option>
      <option value="KMF">Comorian Franc</option>
      <option value="CDF">Congolese Franc</option>
      <option value="CRC">Costa Rican ColÃ³n</option>
      <option value="HRK">Croatian Kuna</option>
      <option value="CUC">Cuban Convertible Peso</option>
      <option value="CZK">Czech Republic Koruna</option>
      <option value="DKK">Danish Krone</option>
      <option value="DJF">Djiboutian Franc</option>
      <option value="DOP">Dominican Peso</option>
      <option value="XCD">East Caribbean Dollar</option>
      <option value="EGP">Egyptian Pound</option>
      <option value="ERN">Eritrean Nakfa</option>
      <option value="EEK">Estonian Kroon</option>
      <option value="ETB">Ethiopian Birr</option>
      <option value="EUR">Euro</option>
      <option value="FKP">Falkland Islands Pound</option>
      <option value="FJD">Fijian Dollar</option>
      <option value="GMD">Gambian Dalasi</option>
      <option value="GEL">Georgian Lari</option>
      <option value="DEM">German Mark</option>
      <option value="GHS">Ghanaian Cedi</option>
      <option value="GIP">Gibraltar Pound</option>
      <option value="GRD">Greek Drachma</option>
      <option value="GTQ">Guatemalan Quetzal</option>
      <option value="GNF">Guinean Franc</option>
      <option value="GYD">Guyanaese Dollar</option>
      <option value="HTG">Haitian Gourde</option>
      <option value="HNL">Honduran Lempira</option>
      <option value="HKD">Hong Kong Dollar</option>
      <option value="HUF">Hungarian Forint</option>
      <option value="ISK">Icelandic KrÃ³na</option>
      <option value="INR">Indian Rupee</option>
      <option value="IDR">Indonesian Rupiah</option>
      <option value="IRR">Iranian Rial</option>
      <option value="IQD">Iraqi Dinar</option>
      <option value="ILS">Israeli New Sheqel</option>
      <option value="ITL">Italian Lira</option>
      <option value="JMD">Jamaican Dollar</option>
      <option value="JPY">Japanese Yen</option>
      <option value="JOD">Jordanian Dinar</option>
      <option value="KZT">Kazakhstani Tenge</option>
      <option value="KES">Kenyan Shilling</option>
      <option value="KWD">Kuwaiti Dinar</option>
      <option value="KGS">Kyrgystani Som</option>
      <option value="LAK">Laotian Kip</option>
      <option value="LVL">Latvian Lats</option>
      <option value="LBP">Lebanese Pound</option>
      <option value="LSL">Lesotho Loti</option>
      <option value="LRD">Liberian Dollar</option>
      <option value="LYD">Libyan Dinar</option>
      <option value="LTL">Lithuanian Litas</option>
      <option value="MOP">Macanese Pataca</option>
      <option value="MKD">Macedonian Denar</option>
      <option value="MGA">Malagasy Ariary</option>
      <option value="MWK">Malawian Kwacha</option>
      <option value="MYR">Malaysian Ringgit</option>
      <option value="MVR">Maldivian Rufiyaa</option>
      <option value="MRO">Mauritanian Ouguiya</option>
      <option value="MUR">Mauritian Rupee</option>
      <option value="MXN">Mexican Peso</option>
      <option value="MDL">Moldovan Leu</option>
      <option value="MNT">Mongolian Tugrik</option>
      <option value="MAD">Moroccan Dirham</option>
      <option value="MZM">Mozambican Metical</option>
      <option value="MMK">Myanmar Kyat</option>
      <option value="NAD">Namibian Dollar</option>
      <option value="NPR">Nepalese Rupee</option>
      <option value="ANG">Netherlands Antillean Guilder</option>
      <option value="TWD">New Taiwan Dollar</option>
      <option value="NZD">New Zealand Dollar</option>
      <option value="NIO">Nicaraguan CÃ³rdoba</option>
      <option value="NGN">Nigerian Naira</option>
      <option value="KPW">North Korean Won</option>
      <option value="NOK">Norwegian Krone</option>
      <option value="OMR">Omani Rial</option>
      <option value="PKR">Pakistani Rupee</option>
      <option value="PAB">Panamanian Balboa</option>
      <option value="PGK">Papua New Guinean Kina</option>
      <option value="PYG">Paraguayan Guarani</option>
      <option value="PEN">Peruvian Nuevo Sol</option>
      <option value="PHP">Philippine Peso</option>
      <option value="PLN">Polish Zloty</option>
      <option value="QAR">Qatari Rial</option>
      <option value="RON">Romanian Leu</option>
      <option value="RUB">Russian Ruble</option>
      <option value="RWF">Rwandan Franc</option>
      <option value="SVC">Salvadoran ColÃ³n</option>
      <option value="WST">Samoan Tala</option>
      <option value="SAR">Saudi Riyal</option>
      <option value="RSD">Serbian Dinar</option>
      <option value="SCR">Seychellois Rupee</option>
      <option value="SLL">Sierra Leonean Leone</option>
      <option value="SGD">Singapore Dollar</option>
      <option value="SKK">Slovak Koruna</option>
      <option value="SBD">Solomon Islands Dollar</option>
      <option value="SOS">Somali Shilling</option>
      <option value="ZAR">South African Rand</option>
      <option value="KRW">South Korean Won</option>
      <option value="XDR">Special Drawing Rights</option>
      <option value="LKR">Sri Lankan Rupee</option>
      <option value="SHP">St. Helena Pound</option>
      <option value="SDG">Sudanese Pound</option>
      <option value="SRD">Surinamese Dollar</option>
      <option value="SZL">Swazi Lilangeni</option>
      <option value="SEK">Swedish Krona</option>
      <option value="CHF">Swiss Franc</option>
      <option value="STD">São Tomé and Príncipe Dobra</option>
      <option value="TJS">Tajikistani Somoni</option>
      <option value="TZS">Tanzanian Shilling</option>
      <option value="THB">Thai Baht</option>
      <option value="TOP">Tongan pa'anga</option>
      <option value="TTD">Trinidad & Tobago Dollar</option>
      <option value="TND">Tunisian Dinar</option>
      <option value="TRY">Turkish Lira</option>
      <option value="TMT">Turkmenistani Manat</option>
      <option value="UGX">Ugandan Shilling</option>
      <option value="UAH">Ukrainian Hryvnia</option>
      <option value="UYU">Uruguayan Peso</option>
      <option value="UZS">Uzbekistan Som</option>
      <option value="VUV">Vanuatu Vatu</option>
      <option value="VEF">Venezuelan BolÃ­var</option>
      <option value="VND">Vietnamese Dong</option>
      <option value="YER">Yemeni Rial</option>
      <option value="ZMK">Zambian Kwacha</option>
    </select>
    <ul class="footer-contact">
      <li>Contact Us</li>
      <li>Feedback</li>
      <li>Trademarks</li>
      <li>Pricacy & Cookies</li>
      <li>Terms of Use</li>
    </ul>
    <p class="brand">Microsoft</p>
  </div>
  <footer class="copyright">&copy; 2020 Microsoft</footer>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>