<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Main\Account\Notifications\NotificationsComponent;

// api doecs
Route::get('/docs', function () {
    return view('api');
});

Route::namespace('App\Http\Controllers\Api\Auth')->group(function () {
    Route::get('/auth/logout', 'LoginController@webLogout');
});

// Notifications
Route::namespace('App\Http\Controllers\Main\Notifications')->group(function () {
    Route::patch('/subscribe-to-notifications', 'NotificationsController@subscribe')->name('subscribe-to-notifications');
    Route::post('/unsubscribe-to-notifications', 'NotificationsController@unsubscribe')->name('unsubscribe-to-notifications');
});

// General landing page ajax
Route::namespace('App\Http\Controllers\Main\Common')->group(function () {
    Route::get('/ajax/user-searches', 'AjaxController@getUserSearch')->name('userSearches');
    Route::post('/ajax/save-keyword', 'AjaxController@saveKeywords')->name('userSaveKeywords');
    Route::post('/ajax/delete-keyword', 'AjaxController@deleteKeywords')->name('userDeleteKeywords');
});

Route::namespace('App\Http\Controllers\Chat')->group(function () {
    Route::post('/chat-quote', 'QuoteController@getQuote')->name('chatQuote');
    Route::post('/chat-quotes', 'QuoteController@quotes')->name('chatQuotes');
    Route::post('/offer-info', 'QuoteController@offerDetails')->name('offerDetails');
    Route::post('/withdraw-offer', 'QuoteController@withdrawOffer')->name('withdrawOffer');
    Route::post('/eval-offer', 'QuoteController@evalOffer')->name('evalOffer');
});

// Tasks
Route::prefix('tasks')->group(function () {

    // Queue
    Route::get('queue', function () {

        Artisan::call('queue:work', ['--stop-when-empty' => true, '--force' => true]);
    });

    // Schedule
    Route::get('schedule', function () {

        Artisan::call('schedule:run');
    });
});

// Main (Livewire)
Route::namespace('App\Http\Livewire\Main')->group(function () {

         // About
     Route::namespace('About')->group(function () {

        // about page
        Route::get('/', AboutComponent::class);

    });

    // Home
    Route::namespace('Home')->group(function () {
        // Home
        Route::get('/', HomeComponent::class);
    });

    // About
    Route::namespace('About')->group(function () {
        // about page
        Route::get('/about', AboutComponent::class);
    });

    // Explore
    Route::namespace('Explore')->prefix('explore')->group(function () {

        // Projects
        Route::namespace('Projects')->prefix('projects')->group(function () {

            // Browse projects
            Route::get('/', ProjectsComponent::class);

            // Category
            Route::get('{category_slug}', CategoryComponent::class);

            // Skill
            Route::get('{category_slug}/{skill_slug}', SkillComponent::class);
        });
    });

    // Project
    Route::namespace('Project')->prefix('project')->group(function () {

        // Project
        Route::get('{pid}/{slug}', ProjectComponent::class);
    });

    // Blog
    Route::namespace('Blog')->prefix('blog')->group(function () {

        // Index
        Route::get('/', BlogComponent::class);

        // Article
        Route::get('{slug}', ArticleComponent::class);
    });

    // Sellers
    Route::namespace('Sellers')->prefix('sellers')->group(function () {

        // Index
        Route::get('/', SellersComponent::class);
    });

    // Redirect
    Route::namespace('Redirect')->prefix('redirect')->group(function () {

        // To
        Route::get('/', RedirectComponent::class);
    });

    // Newsletter
    Route::namespace('Newsletter')->prefix('newsletter')->group(function () {

        // Verify
        Route::get('verify', VerifyComponent::class);
    });

    // Authentication
    Route::namespace('Auth')->middleware('guest')->prefix('auth')->group(function () {

        // Register
        Route::get('register', RegisterComponent::class);

        // Login
        Route::get('login', LoginComponent::class)->name('login');

        // Verify
        Route::get('verify', VerifyComponent::class);

        // Request verification
        Route::get('request', RequestComponent::class);

        // Password
        Route::namespace('Password')->prefix('password')->group(function () {

            // Reset
            Route::get('reset', ResetComponent::class);

            // Update
            Route::get('update', UpdateComponent::class);
        });

        // Social media
        Route::namespace('Social')->group(function () {

            // Github
            Route::namespace('Github')->prefix('github')->group(function () {

                // Redirect
                Route::get('/', RedirectComponent::class);

                // Callback
                Route::get('callback', CallbackComponent::class);
            });

            // Linkedin
            Route::namespace('Linkedin')->prefix('linkedin')->group(function () {

                // Redirect
                Route::get('/', RedirectComponent::class);

                // Callback
                Route::get('callback', CallbackComponent::class);
            });

            // Google
            Route::namespace('Google')->prefix('google')->group(function () {

                // Redirect
                Route::get('/', RedirectComponent::class);

                // Callback
                Route::get('callback', CallbackComponent::class);
            });

            // Facebook
            Route::namespace('Facebook')->prefix('facebook')->group(function () {

                // Redirect
                Route::get('/', RedirectComponent::class);

                // Callback
                Route::get('callback', CallbackComponent::class);
            });

            // Twitter
            Route::namespace('Twitter')->prefix('twitter')->group(function () {

                // Redirect
                Route::get('/', RedirectComponent::class);

                // Callback
                Route::get('callback', CallbackComponent::class);
            });
        });
    });

    // // Logout
    // Route::namespace('Auth')->middleware('auth')->prefix('auth')->group(function () {

    //     // Logout
    //     Route::get('logout', LogoutComponent::class);
    // });

    // Service
    Route::namespace('Service')->prefix('service')->group(function () {

        // Slug
        Route::get('{slug}', ServiceComponent::class)->name('service');
    });

    // Cart
    Route::namespace('Cart')->prefix('cart')->group(function () {

        // cart
        Route::get('/', CartComponent::class);
    });

    // Checkout
    Route::namespace('Checkout')->prefix('checkout')->middleware('auth')->group(function () {

        // Checkout
        Route::get('/', CheckoutComponent::class);

        // Callback
        Route::namespace('Callback')->prefix('callback')->group(function () {

            // Stripe
            Route::get('stripe', StripeComponent::class);

            // Flutterwave
            Route::get('flutterwave', FlutterwaveComponent::class);

            // VNPay
            Route::get('vnpay', VnpayComponent::class);

            // Paytabs
            Route::post('paytabs', PaytabsComponent::class);

            // YouCanPay
            Route::get('youcanpay', YoucanpayComponent::class);

            // Mollie
            Route::get('mollie/{id}', MollieComponent::class);

            // Mercadopago
            Route::get('mercadopago', MercadopagoComponent::class);

            // Xendit
            Route::get('xendit', XenditComponent::class);

            // Epoint.az (Failed)
            Route::get('epoint/failed', function () {

                // We couldn't handle your payment
                return redirect('checkout')->with('error', __('messages.t_we_could_not_handle_ur_payment'));
            });

            // Epoint.az (Success)
            Route::get('epoint/success', EpointComponent::class);
        });
    });

    // Account
    Route::namespace('Account')->prefix('account')->middleware('auth')->group(function () {
        // Notifications
        Route::namespace('Notifications')->group(function () {
            Route::get('notifications', NotificationsComponent::class);
        });

        // Referral Page
        Route::namespace('Referral')->prefix('referral')->group(function () {
            Route::get('/', ReferralComponent::class);
        });

        // Settings
        Route::namespace('Settings')->group(function () {

            // Index
            Route::get('settings', SettingsComponent::class);
        });

        // Password
        Route::namespace('Password')->group(function () {

            // Index
            Route::get('password', PasswordComponent::class);
        });

        // Profile
        Route::namespace('Profile')->group(function () {

            // Index
            Route::get('profile', ProfileComponent::class);
        });

        // Orders
        Route::namespace('Orders')->prefix('orders')->group(function () {

            // All
            Route::get('/', OrdersComponent::class);
            // View order details
            Route::get('/view-order/{orderId}', ViewOrderComponent::class);
            // quotation order
            Route::get('/request-review/{orderId}', RequestReview::class);
            // quotation order
            Route::get('{orderId}/quotation', QuoteComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Requirements
                Route::get('requirements', RequirementsComponent::class);

                // Delivered work
                Route::get('files', FilesComponent::class);
            });
        });

        // Reviews
        Route::namespace('Reviews')->prefix('reviews')->group(function () {

            // Reviews
            Route::get('/', ReviewsComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Create
                Route::get('create/{itemId}', CreateComponent::class);

                // Preview
                Route::get('preview/{id}', PreviewComponent::class);

                // Edit
                Route::get('edit/{id}', EditComponent::class);
            });
        });

        // Favorite list
        Route::namespace('Favorite')->prefix('favorite')->group(function () {

            // List
            Route::get('/', FavoriteComponent::class);
        });

        // Billing
        Route::namespace('Billing')->prefix('billing')->group(function () {

            // Billing
            Route::get('/', BillingComponent::class);
        });

        // Refunds
        Route::namespace('Refunds')->prefix('refunds')->group(function () {

            // Refund
            Route::get('/', RefundsComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Request
                Route::get('request/{id}', RequestComponent::class);

                // Details
                Route::get('details/{id}', DetailsComponent::class);
            });
        });

        // Deposit
        Route::namespace('Deposit')->prefix('deposit')->group(function () {

            // Deposit
            Route::get('/', DepositComponent::class);

            // History
            Route::get('history', HistoryComponent::class);
        });

        // Projects
        Route::namespace('Projects')->prefix('projects')->group(function () {

            // Projects
            Route::get('/', ProjectsComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Checkout
                Route::get('checkout/{id}', CheckoutComponent::class);

                // Milestones
                Route::get('milestones/{id}', MilestonesComponent::class);
            });
        });
    });

    // Create
    Route::namespace('Create')->middleware('auth')->group(function () {

        // Service
        Route::get('create', CreateComponent::class);
    });

    // Start selling
    Route::namespace('Become')->prefix('start_selling')->group(function () {

        // Become seller
        Route::get('/', SellerComponent::class);
    });

    // Seller dashboard
    Route::namespace('Seller')->prefix('seller')->middleware('seller')->group(function () {

        // Home
        Route::namespace('Home')->prefix('home')->group(function () {

            // Index
            Route::get('/', HomeComponent::class);
        });

        // Gigs
        Route::namespace('Gigs')->prefix('gigs')->group(function () {

            // Index
            Route::get('/', GigsComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Analytics
                Route::get('analytics/{id}', AnalyticsComponent::class);

                // Edit
                Route::get('edit/{id}', EditComponent::class);
            });
        });

        // Reviews
        Route::namespace('Reviews')->prefix('reviews')->group(function () {

            // Index
            Route::get('/', ReviewsComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Details
                Route::get('details/{id}', DetailsComponent::class);
                // Create
                Route::get('create/{reviewId}', CreateComponent::class);

                // Preview
                Route::get('preview/{id}', PreviewComponent::class);

                // Edit
                Route::get('edit/{id}', EditComponent::class);
            });
        });

        // Orders
        Route::namespace('Orders')->prefix('orders')->group(function () {

            // Index
            Route::get('/', OrdersComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Details
                Route::get('details/{id}', DetailsComponent::class);

                // Deliver
                Route::get('deliver/{id}', DeliverComponent::class);

                // Requirements
                Route::get('requirements/{id}', RequirementsComponent::class);
            });
        });

        // Quotes
        Route::namespace('Quotes')->prefix('quotes')->group(function () {
            Route::get('/', QuotesComponent::class);
            Route::get('create', CreateQuoteComponent::class);
            Route::get('/{quoteId}/edit', EditQuoteComponent::class);
            Route::get('/{quoteId}/details', QuoteInfoComponent::class);
            Route::get('/settings', SettingsComponent::class);
        });

        // Verification Center
        Route::namespace('Verification')->prefix('verification')->group(function () {
            Route::get('/', VerificationComponent::class);
        });

        // Portfolio
        Route::namespace('Portfolio')->prefix('portfolio')->group(function () {

            // Index
            Route::get('/', PortfolioComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Create
                Route::get('create', CreateComponent::class);

                // Edit
                Route::get('edit/{id}', EditComponent::class);
            });
        });

        // Earnings
        Route::namespace('Earnings')->prefix('earnings')->group(function () {

            // Index
            Route::get('/', EarningsComponent::class);
        });

        // Withdrawals
        Route::namespace('Withdrawals')->prefix('withdrawals')->group(function () {

            // Index
            Route::get('/', WithdrawalsComponent::class);

            // Settings
            Route::get('settings', SettingsComponent::class);

            // Create
            Route::get('create', CreateComponent::class);
        });

        // Refunds
        Route::namespace('Refunds')->prefix('refunds')->group(function () {

            // Index
            Route::get('/', RefundsComponent::class);

            // Options
            Route::namespace('Options')->group(function () {

                // Details
                Route::get('details/{id}', DetailsComponent::class);
            });
        });

        // Projects
        Route::namespace('Projects')->prefix('projects')->group(function () {

            // Index
            Route::get('/', ProjectsComponent::class);

            // Milestones
            Route::namespace('Milestones')->prefix('milestones')->group(function () {

                // List
                Route::get('{id}', MilestonesComponent::class);
            });

            // Bid
            Route::namespace('Bids')->prefix('bids')->group(function () {

                // List
                Route::get('/', BidsComponent::class);

                // Options
                Route::namespace('Options')->group(function () {

                    // Checkout
                    Route::get('checkout/{id}', CheckoutComponent::class);

                    // Edit
                    Route::get('edit/{id}', EditComponent::class);
                });
            });
        });
    });

    // Main quotes payment
    Route::namespace('Quotes')->prefix('quotations')->group(function () {
        Route::get('/{uid}/payment', PaymentComponent::class);
    });

    // Help
    Route::namespace('Help')->prefix('help')->group(function () {

        // Contact
        Route::namespace('Contact')->group(function () {

            // Index
            Route::get('contact', ContactComponent::class);
        });
    });

    // Categories
    Route::namespace('Categories')->prefix('categories')->group(function () {

        // Parent category
        Route::get('{parent}', CategoryComponent::class);

        // Subcategory
        Route::get('{parent}/{subcategory:slug}', SubcategoryComponent::class);
    });

    // Profile
    Route::namespace('Profile')->prefix('profile')->group(function () {

        // Username
        Route::get('{username}', ProfileComponent::class);

        // Portfolio list
        Route::get('{username}/portfolio', PortfolioComponent::class);

        // Get project
        Route::get('{username}/portfolio/{slug}', ProjectComponent::class);
    });

    // Hire
    Route::namespace('Hire')->prefix('hire')->group(function () {

        // skill
        Route::get('{keyword}', HireComponent::class);
    });

    // Messages
    Route::namespace('Messages')->prefix('messages')->middleware('auth')->group(function () {

        // Index
        Route::get('/', MessagesComponent::class);

        // New
        Route::get('new/{username}', NewComponent::class);

        // Conversation
        Route::get('{conversationId}', ConversationComponent::class);
    });

    // Search
    Route::namespace('Search')->prefix('search')->group(function () {

        // Keyword
        Route::get('/', SearchComponent::class);
    });

    // Page
    Route::namespace('Page')->prefix('page')->group(function () {

        // Index
        Route::get('{slug}', PageComponent::class);
    });

    // Reviews
    Route::namespace('Reviews')->prefix('reviews')->group(function () {

        // Index
        Route::get('{id}', ReviewsComponent::class);
    });
});

// Main (Controllers)
Route::namespace('App\Http\Controllers\Main')->group(function () {

    // Posting
    Route::namespace('Post')->prefix('post')->middleware('auth')->group(function () {

        // Project
        Route::namespace('Project')->prefix('project')->group(function () {

            // Get
            Route::get('/', 'ProjectController@form');

            // Post
            Route::post('/', 'ProjectController@create');

            // Skills
            Route::post('skills', 'ProjectController@skills');
        });
    });

    // Edit project
    Route::namespace('Account\Projects')->prefix('account/projects')->group(function () {

        // Edit
        Route::get('edit/{id}', 'EditController@form');

        // Update
        Route::post('edit/{id}', 'EditController@update');
    });
});

// Uploads
Route::namespace('App\Http\Controllers\Uploads')->prefix('uploads')->group(function () {

    // Documents
    Route::namespace('Documents')->prefix('documents')->group(function () {

        // Doc
        Route::get('{uid}', 'DocumentController@download');
    });

    // Order requirements
    Route::namespace('Requirements')->prefix('requirements')->middleware('auth')->group(function () {

        // Order requirements
        Route::get('{orderId}/{itemId}/{reqId}/{fileId}', 'RequirementsController@download');
    });

    // Order delivered work
    Route::namespace('Delivered')->prefix('delivered')->middleware('auth')->group(function () {

        // Order delivered
        Route::get('{orderId}/{itemId}/{workId}/{fileId}', 'DeliveredController@download');
    });

    // Verifications
    Route::namespace('Verifications')->prefix('verifications')->group(function () {

        // File
        Route::get('{id}/{type}/{fileId}', 'VerificationsController@download');
    });
});

// Deposit callback
Route::namespace('App\Http\Controllers\Main\Account\Deposit')->prefix('account/deposit/callback')->middleware('auth')->group(function () {

    // Stripe
    Route::get('stripe', 'StripeController@callback');

    // Flutterwave
    Route::get('flutterwave', 'FlutterwaveController@callback');

    // Cashfree
    Route::post('cashfree/token', 'CashfreeController@token');
    Route::post('cashfree', 'CashfreeController@callback');

    // VNPay
    Route::get('vnpay', 'VNPayController@callback');

    // PayTabs
    Route::post('paytabs', 'PaytabsController@callback');

    // Youcanpay
    Route::get('youcanpay', 'YoucanpayController@callback');

    // Mollie
    Route::get('mollie/{id}', 'MollieController@callback');

    // Mercadopago
    Route::get('mercadopago', 'MercadopagoController@callback');

    // Xendit
    Route::get('xendit', 'XenditController@callback');

    // Epoint.az (Failed)
    Route::get('epoint/failed', function () {

        // We couldn't handle your payment
        return redirect('account/deposit/history')->with('error', __('messages.t_we_could_not_handle_ur_deposit_payment'));
    });

    // Epoint.az (Success)
    Route::get('epoint/success', 'EpointController@callback');
});

// Payment methods callback (Authenticated)
Route::namespace('App\Http\Controllers\Main\Callback')->prefix('callback')->middleware('auth')->group(function () {

    // Paymob
    Route::get('paymob', 'PaymobController@callback');

    // Jazzcash
    Route::post('jazzcash', 'JazzcashController@callback');
});

// Payment methods callback (Guest)
Route::namespace('App\Http\Controllers\Main\Callback')->prefix('callback')->group(function () {

    // PayTR
    Route::get('paytr', 'PaytrController@callback');
    Route::post('paytr', 'PaytrController@webhook');

    // Mollie
    Route::post('mollie/checkout', 'MollieController@checkout');
    Route::post('mollie/deposit', 'MollieController@deposit');

    // Xendit
    Route::post('xendit', 'XenditController@webhook');
});

// Cashfree checkout callback
Route::post('checkout/callback/cashfree/token', 'App\Http\Controllers\Main\Checkout\CashfreeController@token');

// Mollie checkout callback
Route::get('checkout/callback/mollie/redirect', 'App\Http\Controllers\Main\Checkout\MollieController@redirect');
Route::get('checkout/callback/mollie/webhook', 'App\Http\Controllers\Main\Checkout\MollieController@webhook');

// Paystack transfer webhook
Route::post('webhook/paystack', [App\Http\Controllers\Main\Callback\PaystackEventController::class, 'paystackEventBus']);
