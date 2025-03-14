<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\NewsandUpdateController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardNewsandUpdateController;
use App\Http\Controllers\DashboardArticleCategoryController;
use App\Http\Controllers\DashboardArticleController;
use App\Http\Controllers\DashboardBookCategoryController;
use App\Http\Controllers\DashboardChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardCourseCategoryController;
use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\DashboardDonateController;
use App\Http\Controllers\DashboardElibraryController;
use App\Http\Controllers\DashboardForumController;
use App\Http\Controllers\DashboardRequestController;
use App\Http\Controllers\DashboardResearchArticleController;
use App\Http\Controllers\DashboardVideoController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartnerShipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ResearchArticlesController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\DashboardResourceController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\PasswordController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::middleware('localMiddleware')->group(function () {

    Route::get('/meeting', [MeetingController::class, 'index'])->middleware('auth');
    Route::post('/meeting/create', [MeetingController::class, 'create'])->middleware('auth');
    Route::post('/meeting/join', [MeetingController::class, 'join'])->middleware('auth');
    Route::get('/meeting-ended', [MeetingController::class, 'ended'])->middleware('auth');

    // About Us
    Route::get('/', [HomePageController::class, 'index']);

    // About Us
    Route::get('/whoweare', [AboutUsController::class, 'whoweare']);
    Route::get('/websiteteam', [AboutUsController::class, 'websiteteam']);
    Route::get('/esteemedlecturer', [AboutUsController::class, 'esteemedlecturer']);
    Route::get('/websiteteam/drsawhtutsandar', [AboutUsController::class, 'drsawhtutsandar']);
    Route::get('/websiteteam/uzinlinoo', [AboutUsController::class, 'uzinlinoo']);
    Route::get('/websiteteam/vencandavara', [AboutUsController::class, 'vencandavara']);
    Route::get('/websiteteam/venacara', [AboutUsController::class, 'venacara']);
    Route::get('/websiteteam/venvicitta', [AboutUsController::class, 'venvicitta']);
    Route::get('/websiteteam/dawmiemiehan', [AboutUsController::class, 'dawmiemiehan']);

    Route::get('/esteemedlecturer/vencandavara', [AboutUsController::class, 'esteemedlecturervencandavara']);
    Route::get('/esteemedlecturer/venacara', [AboutUsController::class, 'esteemedlecturervenacara']);
    Route::get('/esteemedlecturer/venvicitta', [AboutUsController::class, 'esteemedlecturervenvicitta']);

    // Language Route

    Route::get('/language/en', [LanguageController::class, 'en'])->name('language.en')->middleware('localMiddleware');
    Route::get('/language/mm', [LanguageController::class, 'mm'])->name('language.mm')->middleware('localMiddleware');


    // Profile
    Route::get('profile', [ProfileController::class, 'index']);
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.index'); // Show Edit Profile
    Route::put('profile/edit', [ProfileController::class, 'update'])->name('profile.update'); // Update Profile
    Route::put('profile/update-picture', [ProfileController::class, 'updateProfilePicture']);

    // Research Category
    // Research
    Route::get('/research', [ResearchController::class, 'index'])->name('research.index');
    // PartnerShip
    Route::get('/partnerships', [PartnerShipController::class, 'index'])->name('partnerships.index');
    Route::get('/partnerships/anandakaurna', [PartnerShipController::class, 'anandakaurna'])->name('partnerships.anandakaurna');
    // Research Article
    Route::get('/researcharticles', [ResearchArticlesController::class, 'index'])->name('researcharticle.index');
    Route::get('/researcharticles/{id}/show', [ResearchArticlesController::class, 'show'])->name('researcharticle.show');

    // Courses
    Route::prefix('courses')->group(function () {
        Route::get('/', [CourseController::class, 'index']); // Show all courses

        // This should be a separate route group, applying middleware correctly
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/{id}/show', [CourseController::class, 'show'])->name('course.show'); // Show a single course
            Route::get('/{id}/buy', [CourseController::class, 'buy']); // Buying a course
            Route::post('/{id}/buy', [CourseController::class, 'Purchase']); // Purchasing a course
            Route::get('/{course}/chapters/{chapter}/videos', [VideoController::class, 'chaptershow'])->name('chaptershow')->middleware('courseownershipmiddleware'); // Show all videos in a chapter
            Route::get('/{course}/chapters/{chapter}/videos/{video}', [VideoController::class, 'videoshow'])->name('videoshow')->middleware('courseownershipmiddleware'); // Show a specific video
            Route::get('/{course}/quiz/{quizzes}/questions/{question}', [QuestionController::class, 'questionshow'])->name('questionshow')->middleware('courseownershipmiddleware'); // Show a specific question
            Route::post('/{course}/quiz/{quiz}/questions/{question}/submit', [QuestionController::class, 'submitAnswer'])->name('submitquizanswer')->middleware('courseownershipmiddleware');
            Route::get('/{course}/quiz/{quiz_id}/', [QuestionController::class, 'showScore'])->name('course.complete');
            Route::post('/{course}/quiz/{quiz}/questions/add', [QuestionController::class, 'addQuestion'])->name('question.add');
            Route::put('/{course}/quiz/{quiz}/questions/{question}/update', [QuestionController::class, 'updateQuestion'])->name('question.update');
            Route::delete('/{course}/quiz/{quiz}/questions/{question}/destroy', [QuestionController::class, 'destroyQuestion'])->name('question.destroy');
            Route::post('/{course}/quiz/{quiz}/questions/{question}/answer/add/', [QuestionController::class, 'addAnswer'])->name('answer.add');
            Route::get('/{course}/quiz/{quiz}/questions/{question}/answer/{answer}/destroy/', [QuestionController::class, 'destroyAnswer'])->name('answer.destroy');
        });
    });



    Route::prefix('forum')->group(function () {
        // Forum home: List of all discussions/posts
        Route::get('/', [ForumController::class, 'index'])->name('forum.index');

        // Create a new post/discussion
        Route::get('/create', [ForumController::class, 'create'])->name('forum.create');
        Route::post('/store', [ForumController::class, 'store'])->name('forum.store');

        // View a single post/discussion
        Route::get('/{forum}', [ForumController::class, 'show'])->name('forum.show');

        // Edit a post/discussion
        Route::put('/{forum}', [ForumController::class, 'update'])->name('forum.update');

        // Delete a post/discussion
        Route::delete('/{forum}', [ForumController::class, 'destroy'])->name('forum.destroy');

        // Add a comment to a post
        Route::post('/{forum}/comments', [CommentController::class, 'store'])->name('forum.comment.store');

        // Update a comment of a post
        Route::put('/{forum}/comments/{comment}', [CommentController::class, 'update'])->name('forum.comments.update');

        // Delete a comment
        Route::delete('/{forum}/comments/{comment}', [CommentController::class, 'destroy'])->name('forum.comments.destroy');

        // Reply to a comment
        Route::post('/{forum}/comments/{comment}/replies', [ReplyController::class, 'store'])->name('forum.replies.store');

        Route::put('/{forum}/comments/{comment}/replies', [ReplyController::class, 'update'])->name('forum.replies.update');

        // Delete a reply
        Route::delete('/{forum}/comments/{comment}/replies', [ReplyController::class, 'destroy'])->name('forum.replies.destroy');
    });



    // Articles
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); // Show all articles
    Route::middleware(['auth'])->group(function () {
        Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show'); // Show a specific article
    });

    // E-Library
    Route::prefix('elibrary')->group(function () {
        Route::get('/', [LibraryController::class, 'index'])->name('elibrary.index'); // Show all books
        Route::middleware(['auth'])->group(function () {
            Route::get('/book/{id}', [LibraryController::class, 'show'])->name('elibrary.show'); // Show a specific book
            Route::get('/book/{id}/read', [LibraryController::class, 'read'])->name('elibrary.read')->middleware('auth', 'bookownershipmiddleware'); // Read free book
            Route::get('/book/{id}/buy', [LibraryController::class, 'buy'])->name('elibrary.buy')->middleware('auth'); // Buy specific book
            Route::post('/book/{id}/buy', [LibraryController::class, 'purchase'])->middleware('auth'); // Buy specific book
        });
    });

    // News and Update
    Route::get('/newsandupdate', [NewsandUpdateController::class, 'index']);
    Route::get('/newsandupdate/{id}/show', [NewsandUpdateController::class, 'show']);

    //Donate
    Route::get('/donate', [DonateController::class, 'index']);
    Route::post('/donate', [DonateController::class, 'create'])->middleware('auth');

    // Contact Us
    Route::get('/contactus', [ContactUsController::class, 'index']);
    Route::post('/contactus', [ContactUsController::class, 'sentmail']);

    // Authentication Routes
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login'); // Show login form
        Route::post('/login', [LoginController::class, 'login']); // Process login
        Route::get('/register', [RegisterController::class, 'index']); // Show registration form
        Route::post('/register', [RegisterController::class, 'register']); // Process registration
        Route::get('password/reset', [PasswordController::class, 'index']); // Show reset
        Route::post('password/reset', [PasswordController::class, 'email']); // Process email check
        Route::get('password/reset/form', [PasswordController::class, 'showResetForm']); // Show reset form
        Route::put('password/update', [PasswordController::class, 'reset']); // Process password reset
    });

    // Gallery
    Route::get('/gallery', [GalleryController::class, 'index']);
});
// Authenticated User Routes
Route::middleware(['custom'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index']); // Dashboard


        // User Management
        Route::get('users', [UserController::class, 'index'])->name('users.index'); // List users
        Route::post('users/store', [UserController::class, 'store'])->name('users.store'); // Store user
        Route::put('users/{id}', [UserController::class, 'update'])->name('users.update'); // Update user
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Delete user

        // Role Management
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index'); // List roles
        Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store'); // Store role
        Route::put('roles/{id}', [RoleController::class, 'update'])->name('roles.update'); // Update role
        Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Delete role

        // Article Management
        Route::get('articles', [DashboardArticleController::class, 'index'])->name('articles.index'); // List articles
        Route::post('articles/store', [DashboardArticleController::class, 'store'])->name('articles.store'); // Store article
        Route::put('articles/{id}', [DashboardArticleController::class, 'update'])->name('articles.update'); // Update article
        Route::delete('articles/{id}', [DashboardArticleController::class, 'destroy'])->name('articles.destroy'); // Delete article

        // Article Categories Management
        Route::get('articles/categories', [DashboardArticleCategoryController::class, 'index'])->name('articles.categories.index'); // List Article Categories
        Route::post('articles/categories/store', [DashboardArticleCategoryController::class, 'store'])->name('articles.categories.store'); // Store Article Categories
        Route::put('articles/categories/{id}', [DashboardArticleCategoryController::class, 'update'])->name('articles.categories.update'); // Update Article Categories
        Route::delete('articles/categories/{id}', [DashboardArticleCategoryController::class, 'destroy'])->name('articles.categories.destory'); // Delete Article Categories

        // Research Article Management
        Route::get('researcharticles', [DashboardResearchArticleController::class, 'index'])->name('researcharticles.index'); // List articles
        Route::post('researcharticles/store', [DashboardResearchArticleController::class, 'store'])->name('researcharticles.store'); // Store article
        Route::put('researcharticles/{id}', [DashboardResearchArticleController::class, 'update'])->name('researcharticles.update'); // Update article
        Route::delete('researcharticles/{id}', [DashboardResearchArticleController::class, 'destroy'])->name('researcharticles.destroy'); // Delete article

        // Courses Management
        Route::get('courses', [DashboardCourseController::class, 'index'])->name('courses.index'); // List Courses
        Route::post('courses/store', [DashboardCourseController::class, 'store'])->name('courses.store'); // Store Courses
        Route::put('courses/{id}', [DashboardCourseController::class, 'update'])->name('courses.update'); // Update Courses
        Route::delete('courses/{id}', [DashboardCourseController::class, 'destroy'])->name('courses.destroy'); // Delete Courses

        // Course Categories Management
        Route::get('courses/categories', [DashboardCourseCategoryController::class, 'index'])->name('courses.categories.index'); // List Course Categories
        Route::post('courses/categories/store', [DashboardCourseCategoryController::class, 'store'])->name('courses.categories.store'); // Store Course Categories
        Route::put('courses/categories/{id}', [DashboardCourseCategoryController::class, 'update'])->name('courses.categories.update'); // Update Course Categories
        Route::delete('courses/categories/{id}', [DashboardCourseCategoryController::class, 'destroy'])->name('courses.categories.destory'); // Delete Course Categories

        // Course Chapters Management
        Route::get('courses/chapters', [DashboardChapterController::class, 'index'])->name('courses.chapter.index'); // List Chapters
        Route::post('courses/chapters/store', [DashboardChapterController::class, 'store'])->name('courses.chapter.store'); // Store Chapters
        Route::put('courses/chapters/{id}', [DashboardChapterController::class, 'update'])->name('courses.chapter.update'); // Update Chapters
        Route::delete('courses/chapters/{id}', [DashboardChapterController::class, 'destroy'])->name('courses.chapter.destory'); // Delete Chapters

        // Course Videos Management
        Route::get('courses/videos', [DashboardVideoController::class, 'index'])->name('course.videos.index'); // List Course Videos
        Route::post('courses/videos/store', [DashboardVideoController::class, 'store'])->name('course.videos.store'); // Store Course Videos
        Route::put('courses/videos/{id}', [DashboardVideoController::class, 'update'])->name('course.videos.update'); // Update Course Videos
        Route::delete('courses/videos/{id}', [DashboardVideoController::class, 'destroy'])->name('course.videos.destory'); // Delete Course Videos

        // Course Purchase Request Management
        Route::get('/courses/request', [DashboardRequestController::class, 'courseindex'])->name('courses.request.index'); // List Course Requests
        Route::post('/courses/request/{id}/confirm', [DashboardRequestController::class, 'courseconfirm'])->name('courses.request.confirm'); // Confirem Course Request
        Route::post('/courses/request/{id}/achive', [DashboardRequestController::class, 'courseachive'])->name('courses.request.achive'); // Achive Course Request

        // E-Library Management
        Route::get('books', [DashboardElibraryController::class, 'index'])->name('book.index'); // List Library Book
        Route::post('books/store', [DashboardElibraryController::class, 'store'])->name('book.store'); // Store Library Book
        Route::put('books/{id}', [DashboardElibraryController::class, 'update'])->name('book.update'); // Update Library Book
        Route::delete('books/{id}', [DashboardElibraryController::class, 'destroy'])->name('book.destory'); // Delete Library Book

        // Book Category Management
        Route::get('books/categories', [DashboardBookCategoryController::class, 'index'])->name('book.categories.index'); // List Book Category
        Route::post('books/categories/store', [DashboardBookCategoryController::class, 'store'])->name('book.categories.store'); // Store Book Category
        Route::put('books/categories/{id}', [DashboardBookCategoryController::class, 'update'])->name('book.categories.update'); // Update Book Category
        Route::delete('books/categories/{id}', [DashboardBookCategoryController::class, 'destroy'])->name('book.categories.destory'); // Delete Book Category

        // Book Purchase Request Management
        Route::get('/books/request', [DashboardRequestController::class, 'bookindex'])->name('book.request.index'); // List Book Requests
        Route::post('/books/request/{id}/confirm', [DashboardRequestController::class, 'bookconfirm'])->name('book.request.confirm'); // Book Confirm Requests
        Route::post('/books/request/{id}/achive', [DashboardRequestController::class, 'bookachive'])->name('book.request.achive'); // Book Achive Requests
        // News and Update Management
        Route::get('newsandupdates', [DashboardNewsandUpdateController::class, 'index'])->name('newsandupdate.index'); // List News and Update
        Route::post('newsandupdates/store', [DashboardNewsandUpdateController::class, 'store'])->name('newsandupdate.store'); // Store News and Update
        Route::put('newsandupdates/{id}', [DashboardNewsandUpdateController::class, 'update'])->name('newsandupdate.update'); // Update News and Update
        Route::delete('newsandupdates/{id}', [DashboardNewsandUpdateController::class, 'destroy'])->name('newsandupdate.destory'); // Delete News and Update

        // Forum Management
        Route::get('forums', [DashboardForumController::class, 'index'])->name('dashboard.forum.index'); // List Forums
        Route::put('forums/{id}', [DashboardForumController::class, 'update'])->name('dashboard.forum.update'); // Update Forum
        Route::delete('forums/{id}', [DashboardForumController::class, 'destroy'])->name('dashboard.forum.destory'); // Delete Forum

        // Resource Management
        Route::get('resources', [DashboardResourceController::class, 'index'])->name('resources.index'); // List resources
        Route::get('resources/create', [DashboardResourceController::class, 'create'])->name('resources.create'); // Show create form
        Route::post('resources/store', [DashboardResourceController::class, 'store'])->name('resources.store'); // Store resource
        Route::get('resources/{id}', [DashboardResourceController::class, 'show'])->name('resources.show'); // Show resource
        Route::get('resources/{id}/edit', [DashboardResourceController::class, 'edit'])->name('resources.edit'); // Show edit form
        Route::put('resources/{id}', [DashboardResourceController::class, 'update'])->name('resources.update'); // Update resource
        Route::delete('resources/{id}', [DashboardResourceController::class, 'destroy'])->name('resources.destroy'); // Delete resource
    
        // Donate Management
        Route::get('donate', [DashboardDonateController::class, 'index']);
    });
});
