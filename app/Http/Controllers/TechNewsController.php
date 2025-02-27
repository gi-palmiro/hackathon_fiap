<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmMail;
use App\Models\NewsletterSubscription;
use App\Models\TechNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TechNewsController extends Controller
{
    public function index()
    {
//        $techNews = TechNews::all();
//        $techNews = TechNews::limit(10)->get();
//        return view('blog.index', compact('techNews'));

        $techNews = TechNews::select('id', 'title', 'description', 'url_to_image')->limit(10)->get();
        return view('blog.index', compact('techNews'));
//        $startTime = microtime(true);
//
//        $techNews = TechNews::select('id', 'title', 'description', 'url_to_image')->limit(10)->get();
//
//        $endTime = microtime(true);
//        $duration = $endTime - $startTime;
//
//        \Log::info('Tempo de execução da consulta ao banco de dados: ' . $duration . ' segundos');
//
//        return view('blog.index', compact('techNews'));

    }

    public function show($id)
    {
         $article = TechNews::findOrFail($id);

//        $article = (object)[
//            'id'            => $id,
//            'title'         => 'Título da Notícia Exemplo',
//            'description'   => 'Descrição curta da notícia.',
//            'content'       => '<p>Conteúdo completo da notícia com mais detalhes, imagens, links, etc.</p>',
//            'url_to_image'  => 'https://via.placeholder.com/800x400',
//            'source_name'   => 'Tech News'
//        ];

        return view('blog.show', compact('article'));
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
            'name'  => 'nullable|string|max:255',
        ]);

        NewsletterSubscription::create([
            'name'  => $data['name'] ?? null,
            'email' => $data['email']
        ]);

        $name = $data['name'] ?? 'Subscriber';

        Mail::to($data['email'])->send(new ConfirmMail($name));

        return response()->json(['message' => 'Obrigado por se inscrever na newsletter!']);
    }
}
