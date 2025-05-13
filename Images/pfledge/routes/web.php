<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\OnlineRechner;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/sitemap', [SitemapController::class, 'index']);


Route::get('migrate', function () {
    \Artisan::call('migrate');
    dd("Migration done");
});

Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/', [SimpleController::class, 'getWelcomePage']);
Route::get('/ueberuns', function () {
    return view('aboutus.index');
})->name('aboutus');

Route::view('/impressum', 'impressum')->name('impressum');

Route::get('/partner-und-mitmacher-gesucht', function () {
    return view('partner-und-mitmacher-gesucht');
})->name('partner');

Route::get('/buecher', function () {
    return view('buecher');
})->name('buecher');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/nachrichten-aerztezeitung', [SimpleController::class, 'getAchrichtenNews'])->name('achrichten');
Route::get('/nachrichten-aerztenachrichtendienst', [SimpleController::class, 'getNachrichten'])->name('nachrichten');
Route::get('/nachrichten-bundesministerium-fuer-gesundheit', [SimpleController::class, 'nachrichtenBundesministeriumFuerGesundheit'])->name('nachrichten.bundesministerium');

//finanzierung-der-pflege
Route::get('/finanzierung-der-pflege', function () {
    return view('news_ratgeber.ratgeber.finanzierung-der-pflege');
})->name('ratgeber');

Route::view('/academy', 'academy')->name('academy');
Route::get('/portal-anschreiben', function () {
    return view('musteranschreiben.index');
})->name('musteranschreiben');

Route::get('/portal-anschreiben/fur-pflegende-angehorige', function () {
    return view('fur_pflegebedurftige.index');
})->name('fur_pflegebedurftige');

////// CHECKLISTEN ---- ///////
Route::get('/portal_checklisten', function () {
    return view('checklisten.index');
})->name('checklisten');

Route::get('/checkliste-arzttermine-und-facharztbesuche', function () {
    return view('checklisten.subpages.checkliste-arzttermine-und-facharztbesuche');
})->name('checklist.1');

Route::get('/checkliste-körperpflege-baden-anziehen-hygiene', function () {
    return view('checklisten.subpages.checkliste-korperpflege-baden-anziehen-hygiene');
})->name('checklist.2');

Route::get('/checkliste-sozialkontakte-und-freizeitaktivitäten', function () {
    return view('checklisten.subpages.checkliste-sozialkontakte-und-freizeitaktivitaten');
})->name('checklist.3');

Route::get('/checkliste-pflegeversicherung-und-leistungen', function () {
    return view('checklisten.subpages.checkliste-pflegeversicherung-und-leistungen');
})->name('checklist.4');

Route::get('/checkliste-notfallkontakte-und-informationen', function () {
    return view('checklisten.subpages.checkliste-notfallkontakte-und-informationen');
})->name('checklist.5');

Route::get('/checkliste-regelmäßige-gesundheitschecks-und-monitoring-blutdruck-blutzucker', function () {
    return view('checklisten.subpages.last');
})->name('checklist.6');

////// END --- CHECKLISTEN ---- ///////


// ONLINE-RECHNER ///
Route::get('/portal_onlinerechner', [OnlineRechner::class, 'index'])->name('online.rechner.index');
Route::post('/portal_onlinerechner/calculate', [OnlineRechner::class, 'calculateModule'])->name('online.rechner.calculate');

Route::get('/rechner_pflegeleistungen2', [OnlineRechner::class, 'secondPage'])->name('online.rechner.second');

Route::get('/rechner_pflegegeld2', [OnlineRechner::class, 'thirdPage'])->name('online.rechner.third');
Route::post('/rechner_pflegegeld2/calculate', [OnlineRechner::class, 'calculationForThirdPage'])->name('online.rechner.calculationForThirdPage');

Route::get('/rechner_pflegekosten2', [OnlineRechner::class, 'fourthPage'])->name('online.rechner.fourth');

Route::get('/rechner_pflegekosten_ambulant2',[OnlineRechner::class,'fifthPage'])->name('online.rechner.fifth');
Route::post('/rechner_pflegekosten_ambulant2', [OnlineRechner::class, 'calculateFifthResult'])->name('online.rechner.fifth.calculate');


Route::get('/rechner_zuzahlungen',[OnlineRechner::class,'sixthPage'])->name('online.rechner.sixth');
Route::post('/rechner_zuzahlungen',[OnlineRechner::class,'calculateSixthResult'])->name('online.rechner.sixth.calculate');

// END ONLINE-RECHNER //


Route::get('/marktplatz', [MarketplaceController::class, 'index'])->name('marketplace.index');



//BLOGs
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs.index');
Route::get('/admin/blogs', [BlogsController::class, 'getAllForAdmin'])->name('admin.blogs.index');
Route::post('/admin/blog', [BlogsController::class, 'store'])->name('admin.blogs.store');
Route::get('/admin/blog/create', [BlogsController::class, 'create'])->name('admin.blog.create');
Route::get('/blog/{title}', [BlogsController::class, 'show'])->name('blogs.show');
Route::get('admin/blog/{id}/edit', [BlogsController::class, 'edit'])->name('admin.blog.edit');
Route::delete('/admin/blog/{id}', [BlogsController::class, 'destroy'])->name('admin.blog.destroy');
Route::put('/admin/blogs/{id}', [BlogsController::class, 'update'])->name('admin.blog.update');
Route::get('/blogs/load-mores', [BlogsController::class, 'loadMoreData'])->name('blogs.loadMore');


/// Blog Categories ///
Route::get('/admin/blog/category', [HomeController::class, 'getBlogCategories'])->name('admin.blog.categories.index');
Route::get('/admin/blog/category/create', [HomeController::class, 'createBlogCategory'])->name('admin.blog.category.create');
Route::get('admin/blog/category/{id}/edit', [HomeController::class, 'editBlogCategory'])->name('admin.blog.category.edit');
Route::post('/admin/blog/category/store', [HomeController::class, 'blogCategoryStore'])->name('admin.blog.category.store');
Route::delete('/admin/blog/category/delete/{id}', [HomeController::class, 'BlogCategoryDestroy'])->name('admin.blog.category.destroy');
Route::put('/admin/blog/category/update/{id}', [HomeController::class, 'updateBlogCategory'])->name('admin.blog.category.update');

//Marketplace Cateogires//
Route::get('/admin/marketplace/category', [HomeController::class, 'getMarketplaceCategories'])->name('admin.marketplace.categories.index');
Route::get('/admin/marketplace/category/create', [HomeController::class, 'createMarketplaceCategory'])->name('admin.marketplace.category.create');
Route::get('admin/marketplace/category/{id}/edit', [HomeController::class, 'editMarketplaceCategory'])->name('admin.marketplace.category.edit');
Route::post('/admin/marketplace/category/store', [HomeController::class, 'marketplaceCategoryStore'])->name('admin.marketplace.category.store');
Route::delete('/admin/marketplace/category/delete/{id}', [HomeController::class, 'marketplaceCategoryDestroy'])->name('admin.marketplace.category.destroy');
Route::put('/admin/marketplace/category/update/{id}', [HomeController::class, 'updateMarketplaceCategory'])->name('admin.marketplace.category.update');

Auth::routes();

// FOr Admin
Route::get('/admin/marketplace', [MarketplaceController::class, 'getAllForAdmin'])->name('admin.marketplace.index');
Route::get('/admin/marketplace/add', [MarketplaceController::class, 'create'])->name('admin.marketplace.create');
Route::post('/admin/marketplace', [MarketplaceController::class, 'store'])->name('admin.marketplace.store');
Route::delete('/admin/marketplace/{id}', [MarketplaceController::class, 'destroy'])->name('admin.marketplace.destroy');
Route::get('admin/marketplace/{id}/edit', [MarketplaceController::class, 'edit'])->name('admin.marketplace.edit');
Route::put('admin/marketplace/{id}', [MarketplaceController::class, 'update'])->name('admin.marketplace.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/marketplace/load-more', [MarketplaceController::class, 'loadMore'])->name('marketplace.loadMore');


Route::post('/contact-form', [SimpleController::class, 'postContactForm'])->name('contact.form');

Route::get('/captcha', [CaptchaController::class, 'generateCaptcha'])->name('captcha');

// Route to handle form submission
// Route::post('/submit-form', [CaptchaController::class, 'validateCaptcha'])->name('submit.form');