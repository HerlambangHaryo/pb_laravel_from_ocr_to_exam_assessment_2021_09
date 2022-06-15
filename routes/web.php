<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::resource('Universities', UniversitiesController::class);
    Route::resource('Faculties', FacultiesController::class);
    Route::resource('Courses', CoursesController::class);
    Route::resource('Exams', ExamsController::class);

    Route::resource('Student_exams', Student_examsController::class);
        Route::get('Student_exams/exam_report/{exams}', 'Student_examsController@exam_report')->name('Student_exams.exam_report');

        Route::get('Student_exams/item_and_distructor_analysis/{exams}', 'Student_examsController@item_and_distructor_analysis')->name('Student_exams.item_and_distructor_analysis');

        Route::get('Student_exams/delete_duplicate/{exams}', 'Student_examsController@delete_duplicate')
            ->name('Student_exams.delete_duplicate');

        Route::get('Student_exams/check_exam/{exams}', 'Student_examsController@check_exam')
            ->name('Student_exams.check_exam');

        Route::get('Student_exams/delete_me/{exams}', 'Student_examsController@delete_me')
            ->name('Student_exams.delete_me');

        Route::get('Student_exams/new_exam_report/{exams}', 'Student_examsController@new_exam_report')->name('Student_exams.new_exam_report');

    Route::resource('Student_sheets', Student_sheetsController::class);

    Route::resource('Grades', GradesController::class);

    Route::resource('Dashboard', DashboardController::class);
    Route::resource('Grades', GradesController::class);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');