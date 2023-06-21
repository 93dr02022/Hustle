<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/clockwork' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D3x8nub6cZYB3Sft',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clockwork/app' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyO0MJKnye9fujlf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/__clockwork' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::59RpzcnVmdcNaGZZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rfnkiKofgoScJnh2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::erSqqSSIYb9Opgvi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vw7ojW5l2UqLHhh4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inbox',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LmEc5JKzHoLjzgW2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pusher.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'messages.seen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/updateContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'star',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favorites',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shared',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'conversation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/deleteMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'message.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'avatar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'activeStatus.set',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/chat/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.pusher.auth',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/idInfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.idInfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/sendMessage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.send.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/fetchMessages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.fetch.messages',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/makeSeen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.messages.seen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/getContacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.contacts.get',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/star' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.star',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.favorites',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/shared' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shared',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/deleteConversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.conversation.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/updateSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.avatar.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inbox/api/setActiveStatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.activeStatus.set',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/hosts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.hosts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/folders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/clear-cache-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache-all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/delete-multiple-files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete-multiple-files',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/logs/api/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/button' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.render.button',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/assets/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.scripts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wireui/assets/styles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.assets.styles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/paymentIPN' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment_ipn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xrgTPkhZJORo8NPJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/queue' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VqZ1Cg4CUt9KMnVQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tasks/schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7ve6qA7752sr9b6U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vGS4n99FbJjKeLhf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/explore/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fUOuy1YJCs9JUuH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2RzuXQGlGCLz1TF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1HI86ypgubPfxY0E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GOLMJeeFYhR4FwiF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/newsletter/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4EDklIXKlVgItDFT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CgzeksbSOG2ZIooa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ey3LuIXGzkTOiH1s',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kPBOkM8ba6Gwm0rT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6OnWI4bCwCG3aeUN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KjutELKD0Yrjbea3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/github' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4OxRURKs58SuTkiM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/github/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vnVSEW7AttYdxGmi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3qIWnLspU1bCN9UU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/linkedin/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::co6pShdGGqHGU7Fv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JJsojX9uUWeStkcz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9vffde37gBao7kRM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::meXuU0WAdWskAVbR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JWumVZzMyvIXFrPI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rtkfvoTUwMJli0LU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/twitter/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::inCX8CD8kxB7mLs9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFZQQxXZhvnBOIkg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qjhXUcBlDO9Y2K40',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YZgG6y6Xab5Z78om',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RyslNf404b3EvswX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uUc0lx6Z1MIWdPev',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uzy5rHrjhvc79Q05',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d7vitdBphGFq7xfi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c9Vej0RpwuQvMSDY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FxDdME8bD1fbXbmx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r4De3XlnBo226W5S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/epoint/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d2RUqzSWuhOkfed7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/epoint/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::agtwzny02MBGn2ru',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RFYenWoGI65FB04M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uq5fkkUhnsU28Djj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ZwR5RhkATIRxgB6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/verification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JjD1uXpFbaCeDqsn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HeXu7308QMyQ0oZW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/orders/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ND6wc0vpIrYZ9Rj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/orders/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hbZ33jP7Dx2kSgHo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQThroDrlXeXyFo2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E0afR3fQlUkhf6ss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/billing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cGAT6BRna72mt8Uf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::61a9jDo99BDBkqFD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gr4cV10XsTPP5Uj0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A3qa6tK3UWvGQZ5j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P4EcdWqifWULJpOi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YpFAnvqk18gEsQ8R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/start_selling' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yQUSjnzUrBwQ5bDY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iV8bQk6hsPgWItU8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BTWsqzu2sm2DxL2f',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H5fBgg9Hd3V2zJ9z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SPfrYN4sgYLOx3lP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cKx6CIbv623QqUMH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/quotes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ceJrr2g25XJO30c3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/portfolio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u0xsIhiSsJz8Sj30',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/portfolio/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DnmUUhXEsZWqS5zy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/earnings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QM6tiNewXoncArYn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zb87shuOQdfvHlRr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/withdrawals/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFQzmhGHkVVT8mYt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/withdrawals/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZscfmYF0UBWyFed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ushR85i3TDLn3BmV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wm3wnQCVub9Yur3P',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9R0pTIfgc5vaz96m',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/help/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bjiwyI1FavqalMtk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yaebyiJjUER83PZk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VoJ0k3lLY7OZLhPZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/post/project' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::83QYT72BvZjRwKv8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uXI9h6V99yl3QEkH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/post/project/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aj4MDyNrdLN7dw0l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VzgyIvkqPZxS2WqX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fbrh9sL5hCPO3mn6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/cashfree/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s8XNhzd5UJRd0AI0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RQIjVRED8y2AwnjG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hrHg731uvNzAWqKi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gqk4UzPZjOrYmw7l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2kTKeYmRgQSj6lU4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::safx3Wpop02r5ATg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zf9ZXranwXnyZM6A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/epoint/failed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FcPuCtNk0mRkeZgJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account/deposit/callback/epoint/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e1ktVkkqkPp6TxIx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C7VlRwWr9mD3LtuR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NJzdKIDcBa592Vfx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GBAIQuGqnC8Bueu7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dIrAmpLjJxKau3Cg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/mollie/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R9LpBRvVXK75bVu9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/mollie/deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xt9w8FY93UXTsajh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/callback/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8M9APJkdiVKzhIPc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout/callback/cashfree/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::atKF1EKdqEWdbyLv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhook/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M0fsslxNO58HdWkE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GxmXX2MZcj5n9N5M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::87Lstgl6AG0l5Pms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZPhRkPUdu3CUX8j6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::95L1O2ITEUn9Uu0e',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NA3fCJqPYqoM1j3S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KicixuEuEhXwlHCF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gsXnsjIYEELYV4Tf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RHVRKMUihafiDAqx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/levels' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QTtDOHzBTTCOx3MT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/levels/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BWHEZpn7e7o4Ivfb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/withdrawals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FenbbKm7nbfEHIY8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HtTRVYpIkhDaogXR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/gigs/trash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FREDpKVVkCT7IXa1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/quotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2VgjwB0VXoGxyUfF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zp2Tg6EjtjXICp2C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/portfolios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0MG9LdZ2nUf1ICA1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GZVe2AVcoxHOkVfR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rVDiLT8cizigw3et',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MqF1OtSs98NvpzgA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VeS3GFnicbpeEqQL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wLYM0hQ6gYCLG8MU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dF6wL4Nts6JgQYk7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/skills' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nFi9aj0dBVD742wX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/skills/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vy2gj0mFPv5bztVr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGdANRHGU6SawRZW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Z696AiLJ0uspvTW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/projects/bids/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YBvzgTPcKppo5bNi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DPJXgDakta1Vtiu9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6xxR5Q2x3HlygHbI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Htvquj3yn4tteK7k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subcategories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fAueQVosJK0X3Yqb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HjJFcR6i0Ry6KxK3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iovOAyxcOp6Ec5js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4FJeostMJj7aetdg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3DDUK5laI4YlNAcb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reports/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dAMOHAHygQKi0EWU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/conversations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GwGt4cxhFADAiqT1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/advertisements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KbACHW2KeL006LJP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jvAcScWKFlgTXPV2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vc5EPH16AJhxrloc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/newsletter/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IOMD6x0NInBVUft7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cwBdTyeM447252b3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VXOTkeiJyqrVDwM7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dh8zPCzSn873ppEn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xs7XpMpA3RoTVMyU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u6IBNLJ3eHUCbeOo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xopj6zUpZoakyrZY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ONYNP3NsoClqEPyD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wmTP32iFaXLFaUhw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M8JVKGZokEdoR9aU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/cashfree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OyVcJyO8UswaE8sG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/xendit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3vCxJtu3TJMzxR2i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XveIGLrwWajLuRI3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E5Syg2XVMorOIDnv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/vnpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IZ76dCULNWLqPe2z',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/paymob' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hEdZxqui0qRxL2Ct',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/mercadopago' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Psyk99AyNLK21EGS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/paytabs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lgyaTij4UvpWKXER',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s49rCbOsn5QIkrXc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7hvHR4TvJHXeyNdx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/paytr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVtIcXUU7cviYOtI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/jazzcash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P8nDZSYhTi9jFVDB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/recaptcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JssMiQXb7q2uhBs7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/cloudinary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5v1kARcFpig5ispP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/youcanpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lZAf6wxpXOJGyQCj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/nowpayments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EKi4eJuVX71ZmMaS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/services/epoint' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ks8Us5gGAKifq4CL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ovQPRquRFfbVP4Q3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0IX5yj76jtjF5MCF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VpeDsh8sCKsjzdHY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UV28O59wtQrtx1jp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xVAsRs4q8fH2eeA5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k8ZKQrsJPDBs2JmT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/publish' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MWJXBqAT8WkQVtvu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1z0h6HFleL8c6VCL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/seo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ixEV0RSeAxswsr3A',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G0c3l60ixeGTjqnv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/withdrawal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t1PLbu7Kct80qjyf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wfE5LflPAa0x5VSG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/hero' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hzx7Dgb8OGAJcjKW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/settings/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yZStooSr3bOjOS9t',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/verifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T8FIOj3748dgrEzk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IWu0uwFWMxnSkBYd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LVXwHJ6Hzc9h4TGj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bcndqe7ep8JGIp8n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NFCAzy9uZYZaudZ2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/crontab' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SwionPkuG0B8pQLr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0ZUH2nYRseEs9Hul',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SfwaelYmenQ4jzDV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xa8oDXfvBG9jWmtc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/__clockwork/(?|((?:[0-9-]+|latest))/extended(*:52)|((?:[0-9-]+|latest))(?:/((?:next|previous))(?:/(\\d+))?)?(*:115)|([^/]++)(*:131)|a(?|uth(*:146)|pp(*:156))|(.+)(*:169))|/clockwork/(.+)(*:193)|/livewire/message/([^/]++)(*:227)|/([^/]++)/livewire/message/([^/]++)(*:270)|/livewire/preview\\-file/([^/]++)(*:310)|/inbox/(?|download/([^/]++)(*:345)|group/([^/]++)(*:367)|([^/]++)(*:383)|api/download/([^/]++)(*:412))|/dashboard/(?|s(?|ystem/logs(?|/api/f(?|olders/([^/]++)(?|/(?|download(*:491)|clear\\-cache(*:511))|(*:520))|iles/([^/]++)(?|/(?|download(*:557)|clear\\-cache(*:577))|(*:586)))|(?:/((?:.*)))?(*:610))|ubcategories/edit/([^/]++)(*:645))|users/(?|edit/([^/]++)(*:676)|details/([^/]++)(*:700)|balance/([^/]++)(*:724))|l(?|evels/edit/([^/]++)(*:756)|anguages/(?|edit/([^/]++)(*:789)|translate/([^/]++)(*:815)))|gigs/(?|edit/([^/]++)(*:846)|analytics/([^/]++)(*:872))|quotes/([^/]++)/details(*:904)|orders/details/([^/]++)(*:935)|refunds/details/([^/]++)(*:967)|p(?|rojects/(?|milestones/([^/]++)(*:1009)|plans/(?|edit/([^/]++)(*:1040)|bidding/edit/([^/]++)(*:1070))|categories/edit/([^/]++)(*:1104)|skills/edit/([^/]++)(*:1133))|ages/edit/([^/]++)(*:1161))|c(?|ategories/edit/([^/]++)(*:1198)|o(?|nversations/messages/([^/]++)(*:1240)|untries/edit/([^/]++)(*:1270)))|blog/(?|comments/edit/([^/]++)(*:1311)|edit/([^/]++)(*:1333)))|/wireui/icons/((?:outline|solid))/([^/]++)(*:1386)|/explore/projects/([^/]++)(?|(*:1424)|/([^/]++)(*:1442))|/p(?|ro(?|ject/([^/]++)/([^/]++)(*:1484)|file/([^/]++)(?|(*:1509)|/portfolio(?|(*:1531)|/([^/]++)(*:1549))))|age/([^/]++)(*:1573))|/blog/([^/]++)(*:1597)|/se(?|rvice/([^/]++)(*:1626)|ller/(?|gigs/(?|analytics/([^/]++)(*:1669)|edit/([^/]++)(*:1691))|re(?|views/details/([^/]++)(*:1728)|funds/details/([^/]++)(*:1759))|orders/(?|de(?|tails/([^/]++)(*:1798)|liver/([^/]++)(*:1821))|requirements/([^/]++)(*:1852))|quotes/([^/]++)/edit(*:1882)|p(?|ortfolio/edit/([^/]++)(*:1917)|rojects/(?|milestones/([^/]++)(*:1956)|bids/(?|checkout/([^/]++)(*:1990)|edit/([^/]++)(*:2012))))))|/c(?|heckout/callback/mollie/(?|([^/]++)(*:2066)|redirect(*:2083)|webhook(*:2099))|ategories/([^/]++)(?|(*:2130)|/([^/]++)(*:2148)))|/account/(?|re(?|views/(?|create/([^/]++)(*:2200)|preview/([^/]++)(*:2225)|edit/([^/]++)(*:2247))|funds/(?|request/([^/]++)(*:2282)|details/([^/]++)(*:2307)))|projects/(?|checkout/([^/]++)(*:2347)|milestones/([^/]++)(*:2375)|edit/([^/]++)(?|(*:2400)))|deposit/callback/mollie/([^/]++)(*:2443))|/quotations/([^/]++)/payment(*:2481)|/hire/([^/]++)(*:2504)|/messages/(?|new/([^/]++)(*:2538)|([^/]++)(*:2555))|/reviews/([^/]++)(*:2582)|/uploads/(?|d(?|ocuments/([^/]++)(*:2624)|elivered/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2677))|requirements/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2735)|verifications/([^/]++)/([^/]++)/([^/]++)(*:2784)))/?$}sDu',
    ),
    3 => 
    array (
      52 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MyvH35tno7RDGTD9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mjxX1Z45OY1b06p0',
            'direction' => NULL,
            'count' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'direction',
            2 => 'count',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::03qvLvARxjeH5w7A',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M9yGbwOHbSBV440v',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zrTvAB0qu0ubFaLG',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EWFmb6u7ApkCXBIK',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QM5MAo9varVEJQxf',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'group',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.attachments.download',
          ),
          1 => 
          array (
            0 => 'fileName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.download',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.clear-cache',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.folders.delete',
          ),
          1 => 
          array (
            0 => 'folderIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.download',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.clear-cache',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.files.delete',
          ),
          1 => 
          array (
            0 => 'fileIdentifier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer.index',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Fpksw3VjeEjeprM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DKw4vHKqErKrwbIb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RteDNI3pSWe6tDEb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kjfmhXt2hLUHmxMP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FDW8nn6yV87HbVOB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::929LMN6bn88ZExSW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cVsqYc9A8QTJafDV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g7YTfPxLMFDdPb7O',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vPMXAnbBlNNSm1vG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i2K7AhF3UQPlyjlk',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mtUzkTDslmofCmCB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ch8JRW1IV3sLeQNr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IGprOFgtktvqaQXB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ct8DFnrAo8brgRRu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1070 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ms8oteamMeQgYMyq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VEQbMxb10Y1cmvFG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rb8MQZnhQruhfLwy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M8DZPRsQqKjJJD9w',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LXORnTh8HMf834zL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LI5GbELJS5Skty9d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GLbSMrEMC9ARVTh9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YZUOZWe382plCvDd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1333 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0zclo3rDadp3u3lh',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wireui.icons',
          ),
          1 => 
          array (
            0 => 'style',
            1 => 'icon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SLkbO3DzE1SZKMVR',
          ),
          1 => 
          array (
            0 => 'category_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5sz3OhQwNYCH6ZUg',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'skill_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5TtpGYYmA9XRZXsC',
          ),
          1 => 
          array (
            0 => 'pid',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VMPmoOhVCC2aAs3F',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJWEU4Zw3aVLwQO5',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cHK06KPf5xBmcxg4',
          ),
          1 => 
          array (
            0 => 'username',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FPl4LTNnlsnjmyFb',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aMkO7BOjLo48HzSW',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4uWtDQg8NfVVzZvW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1691 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AkTjTpQv0vAm1rib',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SVnF7MLweRwBJ1Um',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7q8I1Kwer3HcHDAB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m1n63npvRM7AyMlL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPO6WXYRRxs2h42M',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BF5KXeBU4lq7iyT8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1882 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Mp9ysIjlByR8rlY',
          ),
          1 => 
          array (
            0 => 'quoteId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s97956vF0Vp7WOLN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KmCG8BKf71KbgzTK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fF2bY9sMbGvUs6Dn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QDgyUU9b7LPuQh23',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XrN8JuBK13gghNsa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dMtfVAN1Ou8wjlEQ',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W8shJc24dJJMiDUA',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::15sGVg3CWwoosgsk',
          ),
          1 => 
          array (
            0 => 'parent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j8SXgdXc4yYV7tFp',
          ),
          1 => 
          array (
            0 => 'parent',
            1 => 'subcategory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XMcGJgGzH6r6cd4R',
          ),
          1 => 
          array (
            0 => 'itemId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2225 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eanrj0LOgYs8pmiX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TwS5ymzly2M2vwoW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bnlYzRC6nSEbZGan',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8WSnxTKFtf2BNpQj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NPNZHgn7tzP9h7NV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j6TjnbkMe6IvIR2S',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oIqmYZIXFo8NTIYh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P6kkfcK2u2q21SY4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8uZufePRPAJUHk41',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6Q4NyEuFp8xFlH0b',
          ),
          1 => 
          array (
            0 => 'uid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MJusmZ8sZo78uKPt',
          ),
          1 => 
          array (
            0 => 'keyword',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8dANoJIhOet8Fdsg',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2555 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mQFZBuHVzua0CgFf',
          ),
          1 => 
          array (
            0 => 'conversationId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R7pjjpjgOMwCsL1M',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::geXFxll9ri3ykX9u',
          ),
          1 => 
          array (
            0 => 'uid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZJtcG8jqgiQ7iVgc',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'workId',
            3 => 'fileId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hrV3Lky6iUPO33d6',
          ),
          1 => 
          array (
            0 => 'orderId',
            1 => 'itemId',
            2 => 'reqId',
            3 => 'fileId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iN6WRN7pIwjYTNFE',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
            2 => 'fileId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::MyvH35tno7RDGTD9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/{id}/extended',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@getExtendedData',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@getExtendedData',
        'as' => 'generated::MyvH35tno7RDGTD9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '([0-9-]+|latest)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mjxX1Z45OY1b06p0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/{id}/{direction?}/{count?}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@getData',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@getData',
        'as' => 'generated::mjxX1Z45OY1b06p0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'id' => '([0-9-]+|latest)',
        'direction' => '(next|previous)',
        'count' => '\\d+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::03qvLvARxjeH5w7A' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => '__clockwork/{id}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@updateData',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@updateData',
        'as' => 'generated::03qvLvARxjeH5w7A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M9yGbwOHbSBV440v' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '__clockwork/auth',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@authenticate',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@authenticate',
        'as' => 'generated::M9yGbwOHbSBV440v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D3x8nub6cZYB3Sft' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clockwork',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'as' => 'generated::D3x8nub6cZYB3Sft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyO0MJKnye9fujlf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clockwork/app',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'as' => 'generated::iyO0MJKnye9fujlf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QM5MAo9varVEJQxf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clockwork/{path}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'as' => 'generated::QM5MAo9varVEJQxf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::59RpzcnVmdcNaGZZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webRedirect',
        'as' => 'generated::59RpzcnVmdcNaGZZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zrTvAB0qu0ubFaLG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/app',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webIndex',
        'as' => 'generated::zrTvAB0qu0ubFaLG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EWFmb6u7ApkCXBIK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '__clockwork/{path}',
      'action' => 
      array (
        'uses' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'controller' => 'Clockwork\\Support\\Laravel\\ClockworkController@webAsset',
        'as' => 'generated::EWFmb6u7ApkCXBIK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rfnkiKofgoScJnh2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::rfnkiKofgoScJnh2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::erSqqSSIYb9Opgvi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::erSqqSSIYb9Opgvi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vw7ojW5l2UqLHhh4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::Vw7ojW5l2UqLHhh4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inbox' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'inbox',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LmEc5JKzHoLjzgW2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'generated::LmEc5JKzHoLjzgW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'fetch.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'attachments.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'pusher.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'messages.seen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateContactItem',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'contacts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'star',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'favorites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'shared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'conversation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'message.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/deleteMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@deleteMessage',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'message.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'avatar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'activeStatus.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/group/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'group',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'controller' => 'App\\Http\\Controllers\\Chat\\MessagesController@index',
        'namespace' => 'App\\Http\\Controllers\\Chat',
        'prefix' => 'inbox',
        'where' => 
        array (
        ),
        'as' => 'user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.pusher.auth' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/chat/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@pusherAuth',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.pusher.auth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.idInfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/idInfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@idFetchData',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.idInfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.send.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/sendMessage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@send',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.send.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.fetch.messages' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/fetchMessages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@fetch',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.fetch.messages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.attachments.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/download/{fileName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@download',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.attachments.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.messages.seen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/makeSeen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@seen',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.messages.seen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.contacts.get' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/getContacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getContacts',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.contacts.get',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.star' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/star',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@favorite',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.star',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.favorites' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@getFavorites',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.favorites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inbox/api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@search',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shared' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/shared',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@sharedPhotos',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.shared',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.conversation.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/deleteConversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@deleteConversation',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.conversation.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.avatar.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/updateSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@updateSettings',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.avatar.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.activeStatus.set' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inbox/api/setActiveStatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'controller' => 'App\\Http\\Controllers\\Chat\\Api\\MessagesController@setActiveStatus',
        'namespace' => 'App\\Http\\Controllers\\Chat\\Api',
        'prefix' => 'inbox/api',
        'where' => 
        array (
        ),
        'as' => 'api.activeStatus.set',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.hosts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/hosts',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\HostsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.hosts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.folders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/folders/{folderIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FoldersController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.folders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/download',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@download',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}/clear-cache',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCache',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system/logs/api/files/{fileIdentifier}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@delete',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.clear-cache-all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/clear-cache-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@clearCacheAll',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.clear-cache-all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.files.delete-multiple-files' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system/logs/api/delete-multiple-files',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\FilesController@deleteMultipleFiles',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.files.delete-multiple-files',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/api/logs',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Opcodes\\LogViewer\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          1 => 'Opcodes\\LogViewer\\Http\\Middleware\\AuthorizeLogViewer',
          2 => 'Opcodes\\LogViewer\\Http\\Middleware\\ForwardRequestToHostMiddleware',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\LogsController@index',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs/api',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'log-viewer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/logs/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController@__invoke',
        'controller' => 'Opcodes\\LogViewer\\Http\\Controllers\\IndexController',
        'namespace' => 'Opcodes\\LogViewer\\Http\\Controllers',
        'prefix' => 'dashboard/system/logs',
        'where' => 
        array (
        ),
        'as' => 'log-viewer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/icons/{style}/{icon}',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\IconsController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\IconsController',
        'as' => 'wireui.icons',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'style' => '(outline|solid)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.render.button' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/button',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\ButtonController@__invoke',
        'controller' => 'WireUi\\Http\\Controllers\\ButtonController',
        'as' => 'wireui.render.button',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.assets.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/scripts',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@scripts',
        'as' => 'wireui.assets.scripts',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wireui.assets.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wireui/assets/styles',
      'action' => 
      array (
        'uses' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'controller' => 'WireUi\\Http\\Controllers\\WireUiAssetsController@styles',
        'as' => 'wireui.assets.styles',
        'namespace' => NULL,
        'prefix' => '/wireui',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment_ipn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'paymentIPN',
      'action' => 
      array (
        'uses' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'controller' => 'Paytabscom\\Laravel_paytabs\\Controllers\\PaytabsLaravelListenerApi@paymentIPN',
        'as' => 'payment_ipn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xrgTPkhZJORo8NPJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bb30000000000000000";}";s:4:"hash";s:44:"HP6aldvXigaXvE70RgV4lbDjOaP/e1gSx2SxzlR5TLE=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xrgTPkhZJORo8NPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VqZ1Cg4CUt9KMnVQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/queue',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:330:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:111:"function () {

        \\Artisan::call(\'queue:work\', [\'--stop-when-empty\' => true, \'--force\' => true]);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bb70000000000000000";}";s:4:"hash";s:44:"wD5Jg1xH8PY3XyF6ykeSb6VrTlT3Iux7vyCXetnbqMk=";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::VqZ1Cg4CUt9KMnVQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7ve6qA7752sr9b6U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tasks/schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:281:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:63:"function () {

        \\Artisan::call(\'schedule:run\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000bb90000000000000000";}";s:4:"hash";s:44:"loqKHFfxXzAehAAFwD+n/jk5jQguDkSVr1wZjjPFbqU=";}}',
        'namespace' => NULL,
        'prefix' => '/tasks',
        'where' => 
        array (
        ),
        'as' => 'generated::7ve6qA7752sr9b6U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vGS4n99FbJjKeLhf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Home',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vGS4n99FbJjKeLhf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9fUOuy1YJCs9JUuH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::9fUOuy1YJCs9JUuH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SLkbO3DzE1SZKMVR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\CategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\CategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::SLkbO3DzE1SZKMVR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5sz3OhQwNYCH6ZUg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'explore/projects/{category_slug}/{skill_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\SkillComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Explore\\Projects\\SkillComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Explore\\Projects',
        'prefix' => 'explore/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::5sz3OhQwNYCH6ZUg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5TtpGYYmA9XRZXsC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'project/{pid}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Project\\ProjectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Project\\ProjectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Project',
        'prefix' => '/project',
        'where' => 
        array (
        ),
        'as' => 'generated::5TtpGYYmA9XRZXsC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2RzuXQGlGCLz1TF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Blog\\BlogComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Blog\\BlogComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::d2RzuXQGlGCLz1TF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aMkO7BOjLo48HzSW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Blog\\ArticleComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Blog\\ArticleComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Blog',
        'prefix' => '/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::aMkO7BOjLo48HzSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1HI86ypgubPfxY0E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Sellers\\SellersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Sellers\\SellersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Sellers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::1HI86ypgubPfxY0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GOLMJeeFYhR4FwiF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Redirect\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Redirect\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Redirect',
        'prefix' => '/redirect',
        'where' => 
        array (
        ),
        'as' => 'generated::GOLMJeeFYhR4FwiF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4EDklIXKlVgItDFT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Newsletter\\VerifyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Newsletter\\VerifyComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Newsletter',
        'prefix' => '/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::4EDklIXKlVgItDFT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CgzeksbSOG2ZIooa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\RegisterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\RegisterComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::CgzeksbSOG2ZIooa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\LoginComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ey3LuIXGzkTOiH1s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\VerifyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\VerifyComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::ey3LuIXGzkTOiH1s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kPBOkM8ba6Gwm0rT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\RequestComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\RequestComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::kPBOkM8ba6Gwm0rT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6OnWI4bCwCG3aeUN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\ResetComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\ResetComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::6OnWI4bCwCG3aeUN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KjutELKD0Yrjbea3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\UpdateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Password\\UpdateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Password',
        'prefix' => 'auth/password',
        'where' => 
        array (
        ),
        'as' => 'generated::KjutELKD0Yrjbea3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4OxRURKs58SuTkiM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::4OxRURKs58SuTkiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vnVSEW7AttYdxGmi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Github',
        'prefix' => 'auth/github',
        'where' => 
        array (
        ),
        'as' => 'generated::vnVSEW7AttYdxGmi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3qIWnLspU1bCN9UU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::3qIWnLspU1bCN9UU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::co6pShdGGqHGU7Fv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Linkedin',
        'prefix' => 'auth/linkedin',
        'where' => 
        array (
        ),
        'as' => 'generated::co6pShdGGqHGU7Fv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JJsojX9uUWeStkcz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::JJsojX9uUWeStkcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9vffde37gBao7kRM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Google',
        'prefix' => 'auth/google',
        'where' => 
        array (
        ),
        'as' => 'generated::9vffde37gBao7kRM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::meXuU0WAdWskAVbR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::meXuU0WAdWskAVbR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JWumVZzMyvIXFrPI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Facebook',
        'prefix' => 'auth/facebook',
        'where' => 
        array (
        ),
        'as' => 'generated::JWumVZzMyvIXFrPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rtkfvoTUwMJli0LU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\RedirectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::rtkfvoTUwMJli0LU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::inCX8CD8kxB7mLs9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter\\CallbackComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth\\Social\\Twitter',
        'prefix' => 'auth/twitter',
        'where' => 
        array (
        ),
        'as' => 'generated::inCX8CD8kxB7mLs9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFZQQxXZhvnBOIkg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Auth\\LogoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Auth',
        'prefix' => '/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::uFZQQxXZhvnBOIkg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Service\\ServiceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Service\\ServiceComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Service',
        'prefix' => '/service',
        'where' => 
        array (
        ),
        'as' => 'service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qjhXUcBlDO9Y2K40' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Cart\\CartComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Cart\\CartComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Cart',
        'prefix' => '/cart',
        'where' => 
        array (
        ),
        'as' => 'generated::qjhXUcBlDO9Y2K40',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YZgG6y6Xab5Z78om' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout',
        'prefix' => '/checkout',
        'where' => 
        array (
        ),
        'as' => 'generated::YZgG6y6Xab5Z78om',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RyslNf404b3EvswX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\StripeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\StripeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::RyslNf404b3EvswX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uUc0lx6Z1MIWdPev' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\FlutterwaveComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::uUc0lx6Z1MIWdPev',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uzy5rHrjhvc79Q05' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\VnpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\VnpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::uzy5rHrjhvc79Q05',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d7vitdBphGFq7xfi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/callback/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\PaytabsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\PaytabsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::d7vitdBphGFq7xfi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c9Vej0RpwuQvMSDY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\YoucanpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::c9Vej0RpwuQvMSDY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XrN8JuBK13gghNsa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mollie/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MollieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MollieComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::XrN8JuBK13gghNsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FxDdME8bD1fbXbmx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\MercadopagoComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::FxDdME8bD1fbXbmx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r4De3XlnBo226W5S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\XenditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\XenditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::r4De3XlnBo226W5S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d2RUqzSWuhOkfed7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/epoint/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:413:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:194:"function () {

                // We couldn\'t handle your payment
                return \\redirect(\'checkout\')->with(\'error\', \\__(\'messages.t_we_could_not_handle_ur_payment\'));
            }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000be50000000000000000";}";s:4:"hash";s:44:"llhPNrK1G8XBFd4gJzGAQcM8ZAe7W7Q/zUIKqBv7Aas=";}}',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::d2RUqzSWuhOkfed7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::agtwzny02MBGn2ru' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/epoint/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\EpointComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback\\EpointComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Checkout\\Callback',
        'prefix' => 'checkout/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::agtwzny02MBGn2ru',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RFYenWoGI65FB04M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Settings\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Settings\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Settings',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::RFYenWoGI65FB04M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uq5fkkUhnsU28Djj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Password\\PasswordComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Password\\PasswordComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Password',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::uq5fkkUhnsU28Djj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ZwR5RhkATIRxgB6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Profile',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::4ZwR5RhkATIRxgB6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjD1uXpFbaCeDqsn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/verification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Verification\\VerificationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Verification\\VerificationComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Verification',
        'prefix' => '/account',
        'where' => 
        array (
        ),
        'as' => 'generated::JjD1uXpFbaCeDqsn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HeXu7308QMyQ0oZW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::HeXu7308QMyQ0oZW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ND6wc0vpIrYZ9Rj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::1ND6wc0vpIrYZ9Rj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hbZ33jP7Dx2kSgHo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/orders/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options\\FilesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Orders\\Options',
        'prefix' => 'account/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::hbZ33jP7Dx2kSgHo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sQThroDrlXeXyFo2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::sQThroDrlXeXyFo2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XMcGJgGzH6r6cd4R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/create/{itemId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::XMcGJgGzH6r6cd4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eanrj0LOgYs8pmiX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/preview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\PreviewComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::eanrj0LOgYs8pmiX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TwS5ymzly2M2vwoW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/reviews/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Reviews\\Options',
        'prefix' => 'account/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::TwS5ymzly2M2vwoW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E0afR3fQlUkhf6ss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Favorite\\FavoriteComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Favorite',
        'prefix' => 'account/favorite',
        'where' => 
        array (
        ),
        'as' => 'generated::E0afR3fQlUkhf6ss',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGAT6BRna72mt8Uf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/billing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Billing\\BillingComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Billing\\BillingComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Billing',
        'prefix' => 'account/billing',
        'where' => 
        array (
        ),
        'as' => 'generated::cGAT6BRna72mt8Uf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::61a9jDo99BDBkqFD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::61a9jDo99BDBkqFD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bnlYzRC6nSEbZGan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/request/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\RequestComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::bnlYzRC6nSEbZGan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8WSnxTKFtf2BNpQj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Refunds\\Options',
        'prefix' => 'account/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::8WSnxTKFtf2BNpQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gr4cV10XsTPP5Uj0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\DepositComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\DepositComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::Gr4cV10XsTPP5Uj0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A3qa6tK3UWvGQZ5j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\HistoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Deposit\\HistoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Deposit',
        'prefix' => 'account/deposit',
        'where' => 
        array (
        ),
        'as' => 'generated::A3qa6tK3UWvGQZ5j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P4EcdWqifWULJpOi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::P4EcdWqifWULJpOi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NPNZHgn7tzP9h7NV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::NPNZHgn7tzP9h7NV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j6TjnbkMe6IvIR2S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Account\\Projects\\Options',
        'prefix' => 'account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::j6TjnbkMe6IvIR2S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YpFAnvqk18gEsQ8R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Create\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Create\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Create',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YpFAnvqk18gEsQ8R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yQUSjnzUrBwQ5bDY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'start_selling',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Become\\SellerComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Become\\SellerComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Become',
        'prefix' => '/start_selling',
        'where' => 
        array (
        ),
        'as' => 'generated::yQUSjnzUrBwQ5bDY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iV8bQk6hsPgWItU8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Home',
        'prefix' => 'seller/home',
        'where' => 
        array (
        ),
        'as' => 'generated::iV8bQk6hsPgWItU8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BTWsqzu2sm2DxL2f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::BTWsqzu2sm2DxL2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4uWtDQg8NfVVzZvW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::4uWtDQg8NfVVzZvW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AkTjTpQv0vAm1rib' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Gigs\\Options',
        'prefix' => 'seller/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::AkTjTpQv0vAm1rib',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H5fBgg9Hd3V2zJ9z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::H5fBgg9Hd3V2zJ9z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SVnF7MLweRwBJ1Um' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Reviews\\Options',
        'prefix' => 'seller/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::SVnF7MLweRwBJ1Um',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SPfrYN4sgYLOx3lP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::SPfrYN4sgYLOx3lP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m1n63npvRM7AyMlL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::m1n63npvRM7AyMlL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPO6WXYRRxs2h42M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/deliver/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\DeliverComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::jPO6WXYRRxs2h42M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BF5KXeBU4lq7iyT8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/orders/requirements/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options\\RequirementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Orders\\Options',
        'prefix' => 'seller/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::BF5KXeBU4lq7iyT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cKx6CIbv623QqUMH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes\\QuotesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes\\QuotesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes',
        'prefix' => 'seller/quotes',
        'where' => 
        array (
        ),
        'as' => 'generated::cKx6CIbv623QqUMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ceJrr2g25XJO30c3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/quotes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes\\CreateQuoteComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes\\CreateQuoteComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes',
        'prefix' => 'seller/quotes',
        'where' => 
        array (
        ),
        'as' => 'generated::ceJrr2g25XJO30c3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Mp9ysIjlByR8rlY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/quotes/{quoteId}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes\\EditQuoteComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes\\EditQuoteComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Quotes',
        'prefix' => 'seller/quotes',
        'where' => 
        array (
        ),
        'as' => 'generated::3Mp9ysIjlByR8rlY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u0xsIhiSsJz8Sj30' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\PortfolioComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::u0xsIhiSsJz8Sj30',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DnmUUhXEsZWqS5zy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::DnmUUhXEsZWqS5zy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s97956vF0Vp7WOLN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/portfolio/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Portfolio\\Options',
        'prefix' => 'seller/portfolio',
        'where' => 
        array (
        ),
        'as' => 'generated::s97956vF0Vp7WOLN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QM6tiNewXoncArYn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/earnings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings\\EarningsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Earnings',
        'prefix' => 'seller/earnings',
        'where' => 
        array (
        ),
        'as' => 'generated::QM6tiNewXoncArYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zb87shuOQdfvHlRr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::Zb87shuOQdfvHlRr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFQzmhGHkVVT8mYt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::rFQzmhGHkVVT8mYt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZscfmYF0UBWyFed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/withdrawals/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Withdrawals',
        'prefix' => 'seller/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::OZscfmYF0UBWyFed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ushR85i3TDLn3BmV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::ushR85i3TDLn3BmV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7q8I1Kwer3HcHDAB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Refunds\\Options',
        'prefix' => 'seller/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::7q8I1Kwer3HcHDAB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wm3wnQCVub9Yur3P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects',
        'prefix' => 'seller/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::Wm3wnQCVub9Yur3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KmCG8BKf71KbgzTK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Milestones',
        'prefix' => 'seller/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::KmCG8BKf71KbgzTK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9R0pTIfgc5vaz96m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::9R0pTIfgc5vaz96m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fF2bY9sMbGvUs6Dn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/checkout/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\CheckoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::fF2bY9sMbGvUs6Dn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QDgyUU9b7LPuQh23' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/projects/bids/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'seller',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Seller\\Projects\\Bids\\Options',
        'prefix' => 'seller/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::QDgyUU9b7LPuQh23',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Q4NyEuFp8xFlH0b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/{uid}/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Quotes\\PaymentComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Quotes\\PaymentComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Quotes',
        'prefix' => '/quotations',
        'where' => 
        array (
        ),
        'as' => 'generated::6Q4NyEuFp8xFlH0b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bjiwyI1FavqalMtk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'help/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Help\\Contact\\ContactComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Help\\Contact\\ContactComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Help\\Contact',
        'prefix' => '/help',
        'where' => 
        array (
        ),
        'as' => 'generated::bjiwyI1FavqalMtk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::15sGVg3CWwoosgsk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{parent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Categories\\CategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Categories\\CategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::15sGVg3CWwoosgsk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j8SXgdXc4yYV7tFp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/{parent}/{subcategory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Categories\\SubcategoryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Categories\\SubcategoryComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Categories',
        'prefix' => '/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::j8SXgdXc4yYV7tFp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VMPmoOhVCC2aAs3F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::VMPmoOhVCC2aAs3F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hJWEU4Zw3aVLwQO5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\PortfolioComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\PortfolioComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::hJWEU4Zw3aVLwQO5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cHK06KPf5xBmcxg4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{username}/portfolio/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Profile\\ProjectComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Profile\\ProjectComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Profile',
        'prefix' => '/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::cHK06KPf5xBmcxg4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MJusmZ8sZo78uKPt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hire/{keyword}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Hire\\HireComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Hire\\HireComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Hire',
        'prefix' => '/hire',
        'where' => 
        array (
        ),
        'as' => 'generated::MJusmZ8sZo78uKPt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yaebyiJjUER83PZk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\MessagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\MessagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::yaebyiJjUER83PZk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8dANoJIhOet8Fdsg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/new/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\NewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\NewComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::8dANoJIhOet8Fdsg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mQFZBuHVzua0CgFf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'messages/{conversationId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Messages\\ConversationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Messages\\ConversationComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Messages',
        'prefix' => '/messages',
        'where' => 
        array (
        ),
        'as' => 'generated::mQFZBuHVzua0CgFf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VoJ0k3lLY7OZLhPZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Search\\SearchComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Search\\SearchComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Search',
        'prefix' => '/search',
        'where' => 
        array (
        ),
        'as' => 'generated::VoJ0k3lLY7OZLhPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FPl4LTNnlsnjmyFb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Page\\PageComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Page\\PageComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Page',
        'prefix' => '/page',
        'where' => 
        array (
        ),
        'as' => 'generated::FPl4LTNnlsnjmyFb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R7pjjpjgOMwCsL1M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Main\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Main\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Main\\Reviews',
        'prefix' => '/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::R7pjjpjgOMwCsL1M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::83QYT72BvZjRwKv8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@form',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@form',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::83QYT72BvZjRwKv8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uXI9h6V99yl3QEkH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@create',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@create',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::uXI9h6V99yl3QEkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aj4MDyNrdLN7dw0l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'post/project/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@skills',
        'controller' => 'App\\Http\\Controllers\\Main\\Post\\Project\\ProjectController@skills',
        'namespace' => 'App\\Http\\Controllers\\Main\\Post\\Project',
        'prefix' => 'post/project',
        'where' => 
        array (
        ),
        'as' => 'generated::aj4MDyNrdLN7dw0l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oIqmYZIXFo8NTIYh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@form',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@form',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Projects',
        'prefix' => '/account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::oIqmYZIXFo8NTIYh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P6kkfcK2u2q21SY4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@update',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Projects\\EditController@update',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Projects',
        'prefix' => '/account/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::P6kkfcK2u2q21SY4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::geXFxll9ri3ykX9u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/documents/{uid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Documents\\DocumentController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Documents',
        'prefix' => 'uploads/documents',
        'where' => 
        array (
        ),
        'as' => 'generated::geXFxll9ri3ykX9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hrV3Lky6iUPO33d6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/requirements/{orderId}/{itemId}/{reqId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Requirements\\RequirementsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Requirements',
        'prefix' => 'uploads/requirements',
        'where' => 
        array (
        ),
        'as' => 'generated::hrV3Lky6iUPO33d6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZJtcG8jqgiQ7iVgc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/delivered/{orderId}/{itemId}/{workId}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Delivered\\DeliveredController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Delivered',
        'prefix' => 'uploads/delivered',
        'where' => 
        array (
        ),
        'as' => 'generated::ZJtcG8jqgiQ7iVgc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iN6WRN7pIwjYTNFE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'uploads/verifications/{id}/{type}/{fileId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'controller' => 'App\\Http\\Controllers\\Uploads\\Verifications\\VerificationsController@download',
        'namespace' => 'App\\Http\\Controllers\\Uploads\\Verifications',
        'prefix' => 'uploads/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::iN6WRN7pIwjYTNFE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VzgyIvkqPZxS2WqX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\StripeController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\StripeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::VzgyIvkqPZxS2WqX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fbrh9sL5hCPO3mn6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\FlutterwaveController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\FlutterwaveController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Fbrh9sL5hCPO3mn6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s8XNhzd5UJRd0AI0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit/callback/cashfree/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@token',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@token',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::s8XNhzd5UJRd0AI0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RQIjVRED8y2AwnjG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit/callback/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\CashfreeController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::RQIjVRED8y2AwnjG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hrHg731uvNzAWqKi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\VNPayController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\VNPayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::hrHg731uvNzAWqKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gqk4UzPZjOrYmw7l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'account/deposit/callback/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\PaytabsController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\PaytabsController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Gqk4UzPZjOrYmw7l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2kTKeYmRgQSj6lU4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\YoucanpayController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\YoucanpayController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::2kTKeYmRgQSj6lU4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8uZufePRPAJUHk41' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/mollie/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MollieController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MollieController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::8uZufePRPAJUHk41',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::safx3Wpop02r5ATg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MercadopagoController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\MercadopagoController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::safx3Wpop02r5ATg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zf9ZXranwXnyZM6A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\XenditController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\XenditController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::Zf9ZXranwXnyZM6A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FcPuCtNk0mRkeZgJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/epoint/failed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:412:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:193:"function () {

        // We couldn\'t handle your payment
        return \\redirect(\'account/deposit/history\')->with(\'error\', \\__(\'messages.t_we_could_not_handle_ur_deposit_payment\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000c370000000000000000";}";s:4:"hash";s:44:"50auwzROm8V9s/sOd2gQcMvjbmDqP49+/aaV1duuzSk=";}}',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::FcPuCtNk0mRkeZgJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e1ktVkkqkPp6TxIx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account/deposit/callback/epoint/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\EpointController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Account\\Deposit\\EpointController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Account\\Deposit',
        'prefix' => '/account/deposit/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::e1ktVkkqkPp6TxIx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C7VlRwWr9mD3LtuR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaymobController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaymobController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::C7VlRwWr9mD3LtuR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NJzdKIDcBa592Vfx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\JazzcashController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\JazzcashController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::NJzdKIDcBa592Vfx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GBAIQuGqnC8Bueu7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'callback/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@callback',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@callback',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::GBAIQuGqnC8Bueu7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dIrAmpLjJxKau3Cg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@webhook',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaytrController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::dIrAmpLjJxKau3Cg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R9LpBRvVXK75bVu9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/mollie/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@checkout',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@checkout',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::R9LpBRvVXK75bVu9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xt9w8FY93UXTsajh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/mollie/deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@deposit',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\MollieController@deposit',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::xt9w8FY93UXTsajh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8M9APJkdiVKzhIPc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'callback/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\XenditController@webhook',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\XenditController@webhook',
        'namespace' => 'App\\Http\\Controllers\\Main\\Callback',
        'prefix' => '/callback',
        'where' => 
        array (
        ),
        'as' => 'generated::8M9APJkdiVKzhIPc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::atKF1EKdqEWdbyLv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout/callback/cashfree/token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Checkout\\CashfreeController@token',
        'controller' => 'App\\Http\\Controllers\\Main\\Checkout\\CashfreeController@token',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::atKF1EKdqEWdbyLv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dMtfVAN1Ou8wjlEQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mollie/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@redirect',
        'controller' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@redirect',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dMtfVAN1Ou8wjlEQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W8shJc24dJJMiDUA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout/callback/mollie/webhook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@webhook',
        'controller' => 'App\\Http\\Controllers\\Main\\Checkout\\MollieController@webhook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::W8shJc24dJJMiDUA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M0fsslxNO58HdWkE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhook/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Main\\Callback\\PaystackEventController@paystackEventBus',
        'controller' => 'App\\Http\\Controllers\\Main\\Callback\\PaystackEventController@paystackEventBus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M0fsslxNO58HdWkE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GxmXX2MZcj5n9N5M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Home\\HomeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Home\\HomeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Home',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::GxmXX2MZcj5n9N5M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::87Lstgl6AG0l5Pms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Profile\\ProfileComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Profile\\ProfileComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Profile',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::87Lstgl6AG0l5Pms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZPhRkPUdu3CUX8j6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Auth\\LogoutComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Auth\\LogoutComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::ZPhRkPUdu3CUX8j6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::95L1O2ITEUn9Uu0e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Invoices\\InvoicesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Invoices\\InvoicesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Invoices',
        'prefix' => 'dashboard/invoices',
        'where' => 
        array (
        ),
        'as' => 'generated::95L1O2ITEUn9Uu0e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NA3fCJqPYqoM1j3S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\UsersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\UsersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::NA3fCJqPYqoM1j3S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KicixuEuEhXwlHCF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::KicixuEuEhXwlHCF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DKw4vHKqErKrwbIb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::DKw4vHKqErKrwbIb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RteDNI3pSWe6tDEb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::RteDNI3pSWe6tDEb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kjfmhXt2hLUHmxMP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/balance/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\BalanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Options\\BalanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Options',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
        'as' => 'generated::kjfmhXt2hLUHmxMP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gsXnsjIYEELYV4Tf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions\\TransactionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Transactions',
        'prefix' => 'dashboard/users/transactions',
        'where' => 
        array (
        ),
        'as' => 'generated::gsXnsjIYEELYV4Tf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RHVRKMUihafiDAqx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Users\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Users\\Trash\\TrashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Users\\Trash',
        'prefix' => 'dashboard/users/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::RHVRKMUihafiDAqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QTtDOHzBTTCOx3MT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\LevelsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\LevelsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::QTtDOHzBTTCOx3MT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BWHEZpn7e7o4Ivfb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::BWHEZpn7e7o4Ivfb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FDW8nn6yV87HbVOB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/levels/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Levels\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Levels\\Options',
        'prefix' => 'dashboard/levels',
        'where' => 
        array (
        ),
        'as' => 'generated::FDW8nn6yV87HbVOB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FenbbKm7nbfEHIY8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/withdrawals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Withdrawals\\WithdrawalsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Withdrawals',
        'prefix' => 'dashboard/withdrawals',
        'where' => 
        array (
        ),
        'as' => 'generated::FenbbKm7nbfEHIY8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HtTRVYpIkhDaogXR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::HtTRVYpIkhDaogXR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g7YTfPxLMFDdPb7O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::g7YTfPxLMFDdPb7O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vPMXAnbBlNNSm1vG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/analytics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options\\AnalyticsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Options',
        'prefix' => 'dashboard/gigs',
        'where' => 
        array (
        ),
        'as' => 'generated::vPMXAnbBlNNSm1vG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FREDpKVVkCT7IXa1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/gigs/trash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash\\TrashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Gigs\\Trash',
        'prefix' => 'dashboard/gigs/trash',
        'where' => 
        array (
        ),
        'as' => 'generated::FREDpKVVkCT7IXa1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2VgjwB0VXoGxyUfF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/quotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Quotes\\QuotesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Quotes\\QuotesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Quotes',
        'prefix' => 'dashboard/quotes',
        'where' => 
        array (
        ),
        'as' => 'generated::2VgjwB0VXoGxyUfF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i2K7AhF3UQPlyjlk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/quotes/{reference}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Quotes\\QuoteViewComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Quotes\\QuoteViewComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Quotes',
        'prefix' => 'dashboard/quotes',
        'where' => 
        array (
        ),
        'as' => 'generated::i2K7AhF3UQPlyjlk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zp2Tg6EjtjXICp2C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\OrdersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\OrdersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Orders',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::zp2Tg6EjtjXICp2C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mtUzkTDslmofCmCB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/orders/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Orders\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Orders\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Orders\\Options',
        'prefix' => 'dashboard/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::mtUzkTDslmofCmCB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0MG9LdZ2nUf1ICA1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/portfolios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Portfolios\\PortfoliosComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Portfolios\\PortfoliosComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Portfolios',
        'prefix' => 'dashboard/portfolios',
        'where' => 
        array (
        ),
        'as' => 'generated::0MG9LdZ2nUf1ICA1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GZVe2AVcoxHOkVfR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Refunds\\RefundsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Refunds\\RefundsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Refunds',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::GZVe2AVcoxHOkVfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ch8JRW1IV3sLeQNr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/refunds/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options\\DetailsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Refunds\\Options',
        'prefix' => 'dashboard/refunds',
        'where' => 
        array (
        ),
        'as' => 'generated::ch8JRW1IV3sLeQNr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rVDiLT8cizigw3et' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::rVDiLT8cizigw3et',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MqF1OtSs98NvpzgA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects',
        'prefix' => 'dashboard/projects',
        'where' => 
        array (
        ),
        'as' => 'generated::MqF1OtSs98NvpzgA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IGprOFgtktvqaQXB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/milestones/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones\\MilestonesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Milestones',
        'prefix' => 'dashboard/projects/milestones',
        'where' => 
        array (
        ),
        'as' => 'generated::IGprOFgtktvqaQXB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VeS3GFnicbpeEqQL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\PlansComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\PlansComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::VeS3GFnicbpeEqQL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ct8DFnrAo8brgRRu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans',
        'prefix' => 'dashboard/projects/plans',
        'where' => 
        array (
        ),
        'as' => 'generated::ct8DFnrAo8brgRRu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ms8oteamMeQgYMyq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/plans/bidding/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Plans\\Bidding',
        'prefix' => 'dashboard/projects/plans/bidding',
        'where' => 
        array (
        ),
        'as' => 'generated::Ms8oteamMeQgYMyq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wLYM0hQ6gYCLG8MU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::wLYM0hQ6gYCLG8MU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dF6wL4Nts6JgQYk7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::dF6wL4Nts6JgQYk7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VEQbMxb10Y1cmvFG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Categories\\Options',
        'prefix' => 'dashboard/projects/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::VEQbMxb10Y1cmvFG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nFi9aj0dBVD742wX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\SkillsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::nFi9aj0dBVD742wX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vy2gj0mFPv5bztVr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::Vy2gj0mFPv5bztVr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rb8MQZnhQruhfLwy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/skills/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Skills\\Options',
        'prefix' => 'dashboard/projects/skills',
        'where' => 
        array (
        ),
        'as' => 'generated::Rb8MQZnhQruhfLwy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGdANRHGU6SawRZW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Subscriptions',
        'prefix' => 'dashboard/projects/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::GGdANRHGU6SawRZW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Z696AiLJ0uspvTW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids',
        'prefix' => 'dashboard/projects/bids',
        'where' => 
        array (
        ),
        'as' => 'generated::9Z696AiLJ0uspvTW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YBvzgTPcKppo5bNi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/projects/bids/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions\\SubscriptionsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Projects\\Bids\\Subscriptions',
        'prefix' => 'dashboard/projects/bids/subscriptions',
        'where' => 
        array (
        ),
        'as' => 'generated::YBvzgTPcKppo5bNi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DPJXgDakta1Vtiu9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\CategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\CategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::DPJXgDakta1Vtiu9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6xxR5Q2x3HlygHbI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::6xxR5Q2x3HlygHbI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LXORnTh8HMf834zL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Categories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Categories\\Options',
        'prefix' => 'dashboard/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::LXORnTh8HMf834zL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Htvquj3yn4tteK7k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\SubcategoriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::Htvquj3yn4tteK7k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fAueQVosJK0X3Yqb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::fAueQVosJK0X3Yqb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6Fpksw3VjeEjeprM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subcategories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Subcategories\\Options',
        'prefix' => 'dashboard/subcategories',
        'where' => 
        array (
        ),
        'as' => 'generated::6Fpksw3VjeEjeprM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HjJFcR6i0Ry6KxK3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reviews\\ReviewsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reviews\\ReviewsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reviews',
        'prefix' => 'dashboard/reviews',
        'where' => 
        array (
        ),
        'as' => 'generated::HjJFcR6i0Ry6KxK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iovOAyxcOp6Ec5js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\UsersComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\UsersComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::iovOAyxcOp6Ec5js',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4FJeostMJj7aetdg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\GigsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\GigsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::4FJeostMJj7aetdg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3DDUK5laI4YlNAcb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\ProjectsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\ProjectsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::3DDUK5laI4YlNAcb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dAMOHAHygQKi0EWU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reports/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Reports\\BidsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Reports\\BidsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Reports',
        'prefix' => 'dashboard/reports',
        'where' => 
        array (
        ),
        'as' => 'generated::dAMOHAHygQKi0EWU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GwGt4cxhFADAiqT1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/conversations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Conversations\\ConversationsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Conversations\\ConversationsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Conversations',
        'prefix' => 'dashboard/conversations',
        'where' => 
        array (
        ),
        'as' => 'generated::GwGt4cxhFADAiqT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LI5GbELJS5Skty9d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/conversations/messages/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Conversations\\MessagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Conversations\\MessagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Conversations',
        'prefix' => 'dashboard/conversations',
        'where' => 
        array (
        ),
        'as' => 'generated::LI5GbELJS5Skty9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KbACHW2KeL006LJP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/advertisements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Advertisements\\AdvertisementsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Advertisements',
        'prefix' => 'dashboard/advertisements',
        'where' => 
        array (
        ),
        'as' => 'generated::KbACHW2KeL006LJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jvAcScWKFlgTXPV2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Support\\SupportComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Support\\SupportComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Support',
        'prefix' => 'dashboard/support',
        'where' => 
        array (
        ),
        'as' => 'generated::jvAcScWKFlgTXPV2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vc5EPH16AJhxrloc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Newsletter\\NewsletterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Newsletter\\NewsletterComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::Vc5EPH16AJhxrloc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IOMD6x0NInBVUft7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/newsletter/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Newsletter\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Newsletter\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Newsletter',
        'prefix' => 'dashboard/newsletter',
        'where' => 
        array (
        ),
        'as' => 'generated::IOMD6x0NInBVUft7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cwBdTyeM447252b3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\LanguagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\LanguagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::cwBdTyeM447252b3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VXOTkeiJyqrVDwM7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::VXOTkeiJyqrVDwM7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::929LMN6bn88ZExSW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::929LMN6bn88ZExSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cVsqYc9A8QTJafDV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/languages/translate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\TranslateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Languages\\Options\\TranslateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Languages\\Options',
        'prefix' => 'dashboard/languages',
        'where' => 
        array (
        ),
        'as' => 'generated::cVsqYc9A8QTJafDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dh8zPCzSn873ppEn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\PagesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\PagesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::dh8zPCzSn873ppEn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xs7XpMpA3RoTVMyU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::xs7XpMpA3RoTVMyU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M8DZPRsQqKjJJD9w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Pages\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Pages\\Options',
        'prefix' => 'dashboard/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::M8DZPRsQqKjJJD9w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u6IBNLJ3eHUCbeOo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\CountriesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\CountriesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::u6IBNLJ3eHUCbeOo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xopj6zUpZoakyrZY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::Xopj6zUpZoakyrZY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GLbSMrEMC9ARVTh9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/countries/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Countries\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Countries\\Options',
        'prefix' => 'dashboard/countries',
        'where' => 
        array (
        ),
        'as' => 'generated::GLbSMrEMC9ARVTh9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ONYNP3NsoClqEPyD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaypalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaypalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::ONYNP3NsoClqEPyD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wmTP32iFaXLFaUhw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\StripeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\StripeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::wmTP32iFaXLFaUhw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M8JVKGZokEdoR9aU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaystackComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaystackComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::M8JVKGZokEdoR9aU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OyVcJyO8UswaE8sG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cashfree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\CashfreeComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\CashfreeComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::OyVcJyO8UswaE8sG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3vCxJtu3TJMzxR2i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/xendit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\XenditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\XenditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::3vCxJtu3TJMzxR2i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XveIGLrwWajLuRI3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/offline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\OfflineComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\OfflineComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::XveIGLrwWajLuRI3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E5Syg2XVMorOIDnv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\FlutterwaveComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\FlutterwaveComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::E5Syg2XVMorOIDnv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IZ76dCULNWLqPe2z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/vnpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\VNPayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\VNPayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::IZ76dCULNWLqPe2z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hEdZxqui0qRxL2Ct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paymob',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaymobComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaymobComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::hEdZxqui0qRxL2Ct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Psyk99AyNLK21EGS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/mercadopago',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\MercadopagoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\MercadopagoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::Psyk99AyNLK21EGS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lgyaTij4UvpWKXER' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paytabs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaytabsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaytabsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::lgyaTij4UvpWKXER',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s49rCbOsn5QIkrXc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\RazorpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\RazorpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::s49rCbOsn5QIkrXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7hvHR4TvJHXeyNdx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\MollieComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\MollieComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::7hvHR4TvJHXeyNdx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVtIcXUU7cviYOtI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/paytr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\PaytrComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\PaytrComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::BVtIcXUU7cviYOtI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P8nDZSYhTi9jFVDB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/jazzcash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\JazzcashComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\JazzcashComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::P8nDZSYhTi9jFVDB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JssMiQXb7q2uhBs7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/recaptcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\RecaptchaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\RecaptchaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::JssMiQXb7q2uhBs7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5v1kARcFpig5ispP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/cloudinary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\CloudinaryComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\CloudinaryComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::5v1kARcFpig5ispP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lZAf6wxpXOJGyQCj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/youcanpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\YoucanpayComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\YoucanpayComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::lZAf6wxpXOJGyQCj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EKi4eJuVX71ZmMaS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/nowpayments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\NowpaymentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\NowpaymentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::EKi4eJuVX71ZmMaS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ks8Us5gGAKifq4CL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/services/epoint',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Services\\EpointComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Services\\EpointComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Services',
        'prefix' => 'dashboard/services',
        'where' => 
        array (
        ),
        'as' => 'generated::ks8Us5gGAKifq4CL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ovQPRquRFfbVP4Q3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\GeneralComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\GeneralComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ovQPRquRFfbVP4Q3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0IX5yj76jtjF5MCF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\CurrencyComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\CurrencyComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::0IX5yj76jtjF5MCF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VpeDsh8sCKsjzdHY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\AuthComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\AuthComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::VpeDsh8sCKsjzdHY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UV28O59wtQrtx1jp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\CommissionComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\CommissionComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::UV28O59wtQrtx1jp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xVAsRs4q8fH2eeA5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\FooterComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\FooterComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::xVAsRs4q8fH2eeA5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k8ZKQrsJPDBs2JmT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\MediaComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\MediaComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::k8ZKQrsJPDBs2JmT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MWJXBqAT8WkQVtvu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/publish',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\PublishComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\PublishComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::MWJXBqAT8WkQVtvu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1z0h6HFleL8c6VCL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SecurityComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SecurityComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::1z0h6HFleL8c6VCL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ixEV0RSeAxswsr3A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/seo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SeoComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SeoComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::ixEV0RSeAxswsr3A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G0c3l60ixeGTjqnv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\SmtpComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\SmtpComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::G0c3l60ixeGTjqnv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t1PLbu7Kct80qjyf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/withdrawal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\WithdrawalComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\WithdrawalComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::t1PLbu7Kct80qjyf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wfE5LflPAa0x5VSG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\AppearanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\AppearanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::wfE5LflPAa0x5VSG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hzx7Dgb8OGAJcjKW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/hero',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\HeroComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\HeroComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::Hzx7Dgb8OGAJcjKW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yZStooSr3bOjOS9t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/settings/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Settings\\ChatComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Settings\\ChatComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Settings',
        'prefix' => 'dashboard/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::yZStooSr3bOjOS9t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T8FIOj3748dgrEzk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/verifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Verifications\\VerificationsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Verifications\\VerificationsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Verifications',
        'prefix' => 'dashboard/verifications',
        'where' => 
        array (
        ),
        'as' => 'generated::T8FIOj3748dgrEzk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IWu0uwFWMxnSkBYd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\ArticlesComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\ArticlesComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::IWu0uwFWMxnSkBYd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LVXwHJ6Hzc9h4TGj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\SettingsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\SettingsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::LVXwHJ6Hzc9h4TGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bcndqe7ep8JGIp8n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\CommentsComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::bcndqe7ep8JGIp8n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YZUOZWe382plCvDd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/comments/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Comments\\Options',
        'prefix' => 'dashboard/blog/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::YZUOZWe382plCvDd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NFCAzy9uZYZaudZ2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\CreateComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\CreateComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::NFCAzy9uZYZaudZ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0zclo3rDadp3u3lh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/blog/edit/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\EditComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Blog\\Options\\EditComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Blog\\Options',
        'prefix' => 'dashboard/blog',
        'where' => 
        array (
        ),
        'as' => 'generated::0zclo3rDadp3u3lh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SwionPkuG0B8pQLr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/crontab',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\CrontabComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\CrontabComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::SwionPkuG0B8pQLr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ZUH2nYRseEs9Hul' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\CacheComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\CacheComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::0ZUH2nYRseEs9Hul',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SfwaelYmenQ4jzDV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\System\\MaintenanceComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\System\\MaintenanceComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\System',
        'prefix' => 'dashboard/system',
        'where' => 
        array (
        ),
        'as' => 'generated::SfwaelYmenQ4jzDV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xa8oDXfvBG9jWmtc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'banned.ip',
          2 => 'guest:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Admin\\Auth\\LoginComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Admin\\Auth\\LoginComponent',
        'namespace' => 'App\\Http\\Livewire\\Admin\\Auth',
        'prefix' => 'dashboard',
        'where' => 
        array (
        ),
        'as' => 'generated::xa8oDXfvBG9jWmtc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
