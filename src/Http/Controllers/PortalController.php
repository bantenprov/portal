<?php namespace Bantenprov\Portal\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Portal\Facades\Portal;
use Bantenprov\Portal\Models\PortalModel;

/**
 * The PortalController class.
 *
 * @package Bantenprov\Portal
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalController extends Controller
{
    public function demo()
    {
        return Portal::welcome();
    }
}
