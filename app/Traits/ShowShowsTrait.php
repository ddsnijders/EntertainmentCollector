<? 
namespace App\Traits;

use App\Http\Controllers\ShowController;

trait ShowShowsTrait {
    public function showShows(){
        return app('App\Http\Controllers\ShowController')->show();
    }
}

?>