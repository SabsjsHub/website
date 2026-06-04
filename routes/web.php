<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ExPresidentController;
use App\Http\Controllers\CurrentCommitee;
use App\Http\Controllers\KSMController;
use App\Http\Controllers\workshopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShramnopasakController;
use App\Http\Controllers\JSPController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\applicationFormController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ChaturmasListController;
use App\Http\Controllers\PakhiController;
use App\Http\Controllers\mahilaActivities;

Route::get('/', [HomeController::class, 'index']);


Route::get('/jsp', [JSPController::class, 'index'])->name('jsp.index');

Route::get('/acharyajan', function () {
    return view('acharyajan.acharyajan');
});

Route::get('/pics', [GalleryController::class, 'index']);

Route::get('/dharmik-activity', function () {
    return view('activities.dharmik');
});

Route::get('/pakhi/latest', [PakhiController::class, 'latest'])->name('pakhi.latest');

Route::get('/high-edu', function () {
    return view('activities.high-edu');
});

Route::get('/forms/download/{filename}', [applicationFormController::class, 'proxyDownload'])
    ->where('filename', '.*')
    ->name('forms.download');



Route::get('/shramnopasak', [ShramnopasakController::class, 'index'])->name('shramnopasak.index');

Route::get('/nanesh_vani', [PublicationController::class, 'naneshvani'])->name('nanesh_vani');
Route::get('/ram_uvach', [PublicationController::class, 'ram_uvach'])->name('ram_uvach');
Route::get('/ram-dhwani', [PublicationController::class, 'ram_dhwani'])->name('ram-dhwani');
Route::get('/ram-darshan', [PublicationController::class, 'ram_darshan'])->name('ram-darshan');
Route::get('/samta-katha-mala', [PublicationController::class, 'samta_katha_mala'])->name('samta_katha_mala');
Route::get('/other_sahitya', [PublicationController::class, 'other_sahitya'])->name('other_sahitya');
Route::get('/aagam-ahimsa', [PublicationController::class, 'agam'])->name('agam');

Route::get('/samta-sarv-mangal', function () {
    return view('samta_sarv_mangal.index');
})->name('samta_sarv_mangal');

Route::get('/application-form', [applicationFormController::class, 'index'])->name('application');


Route::get('/donation', function () {
    return view('donation.index');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/stutiyan', function () {
    return view('activities.stutiyan');
});
Route::get('/samta_jankalyan_pranyas', function () {
    return view('activities.samta_jankalyan_pranyas');
});

Route::get('/samta_hospital', function () {
    return view('activities.samta_hospital');
});
Route::get('/nanesh-chikitsalya-ratlaam', function () {
    return view('activities.nanesh-chikitsalya-ratlaam');
});
Route::get('/utkranti', function () {
    return view('activities.utkranti');
});
Route::get('/daanpeti_yojna', function () {
    return view('activities.daanpeti_yojna');
});

Route::get('/shramnopasak_vikas_sahyogi_yojna', function () {
    return view('activities.shramnopasak_vikas_sahyogi_yojna');
});

Route::get('/idam-na-mam', function () {
    return view('activities.idam-na-mam');
});

Route::get('/samta-mitti-ptra', function () {
    return view('activities.samta-mitti-ptra');
});
Route::get('/aadinath-pashu-raksha-santhan', function () {
    return view('activities.aadinath-pashu-raksha-santhan');
});


Route::get('/chaturmas-lists', [ChaturmasListController::class, 'chaturmasLists'])->name('chaturmas.suchi');

Route::get('/veer-sewa-samiti', function () {
    return view('activities.veer-sewa-samiti');
});
Route::get('/vihaarcharya', function () {
    return view('activities.vihaarcharya');
});

Route::get('/api/vihar-data', function () {
    return Http::get('https://vihar.sadhumargi.org/test_api.php')->json();
});
Route::get('/samta-bhawan-construction', function () {
    return view('activities.samta-bhawan-construction');
});
Route::get('/nanesh_samta_prize', function () {
    return view('activities.nanesh_samta_prize');
});

Route::get('/nanesh_janaseva-prize', function () {
    return view('activities.nanesh_janaseva-prize');
});
Route::get('/sahitya-prize', function () {
    return view('activities.sahitya-prize');
});
Route::get('/higher_admin_services_prize', function () {
    return view('activities.higher_admin_services_prize');
});
Route::get('/samta-bhawan-aachar-sahita', function () {
    return view('activities.samta-bhawan-aachar-sahita');
});

Route::get('/ex-president', [ExPresidentController::class, 'index']);
Route::get('/current-comm', [CurrentCommitee::class, 'index']);
Route::get('/ksm', [KSMController::class, 'index']);
Route::get('/workshop', [workshopController::class, 'index']);

//----------------------महिला समिति Routes----------------------
Route::get('/mahila', function () {
    return view('mahila.index');
});


Route::get('/ex-president-mahila', function () {
    return view('mahila.ex-president-mahila');
});

Route::get('/current-mahila', function () {
    return view('mahila.current-mahila');
});

Route::get('/ksm-mahila', function () {
    return view('mahila.ksm-mahila');
});

Route::get('/application-form-ms', function () {
    return view('mahila.application-form-ms');
});

Route::get('/prativedan', function () {
    return view('mahila.prativedan');
});

Route::get('/events-ms', function () {
    return view('mahila.events-ms');
});


Route::get('/pics-ms', [GalleryController::class, 'pics_ms']);


Route::get('/activities-ms', [mahilaActivities::class, 'activities']);

//----------------------Yuva Routes----------------------
Route::get('/yuva', function () {
    return view('yuva.index');
});

Route::get('/pics-yuva', [GalleryController::class, 'pics_yuva']);

Route::get('/activities-yuva', function () {
    return view('yuva.activities-yuva');
});

//----------------------SPF Routes----------------------
Route::get('/spf', function () {
    return view('spf.index');
});


Route::get('/events-spf', function () {
    return view('spf.events');
});

Route::get('/event-spf/{id}', function ($id) {
    return view('spf.event-detail', ['eventId' => $id]);
});

Route::get('/spf-projects', function () {
    return view('spf.spf-projects');
});

Route::get('/spf-committee', function () {
    return view('spf.committee');
});

Route::get('/spf-gallery', function () {
    return view('spf.spf-gallery');
});