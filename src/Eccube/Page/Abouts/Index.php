<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2014 LOCKON CO.,LTD. All Rights Reserved.
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Page\Abouts;

use Eccube\Application;
use Eccube\Page\AbstractPage;
use Eccube\Framework\DB\MasterData;

/**
 * サイト概要のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 */
class Index extends AbstractPage
{
    /**
     * Page を初期化する.
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        $this->tpl_title = '当サイトについて';
        $masterData = new MasterData();
        $this->arrPref = $masterData->getMasterData('mtb_pref');
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    public function process()
    {
        parent::process();
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    public function action()
    {
    }
}
