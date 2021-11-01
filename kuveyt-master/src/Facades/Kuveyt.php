<?php
/**
 * User: gokcinodul
 * Date: 13.07.2021
 * Time: 12:19
 */
namespace gokcinodul\Kuveyt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of KuveytFacade
 *
 * @author gokcinodul
 */
class Kuveyt extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'kuveyt';
    }
}