<?php
Route::get('/', function() {
    return redirect(route('admin.dashboard'));
});

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');
    Route::get('speak_up', 'SpeakController')->name('speak_up');
    Route::get('test', 'TestController')->name('test');
    Route::get('courses', 'CoursesController')->name('courses');
    Route::get('note_side', 'NotesideController')->name('note_side');
    Route::get('request', 'RequestController')->name('request');
    Route::get('notification', 'NotificationController')->name('notification');
    Route::get('analytics', 'AnalyticsController')->name('analytics');
    Route::get('setting', 'SettingController')->name('setting');
    Route::get('languages', 'LanguagesController')->name('languages');
    Route::get('databases', 'DatabasesController')->name('databases');
    Route::get('framworks', 'FrameworksController')->name('framworks');
    Route::get('componets', 'ComponentsController')->name('componets');
    Route::get('discover', 'DiscoverController')->name('discover');
    Route::get('code', 'CodeController')->name('code');
    Route::get('dev', 'DevController')->name('dev');
    Route::get('qa', 'QaController')->name('qa');
    Route::get('design', 'DesignController')->name('design');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
