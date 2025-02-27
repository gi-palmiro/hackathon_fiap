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
//        $featuredNews = TechNews::first(); // Pega a primeira notícia como destaque
//        $news = TechNews::skip(1)->take(6)->get(); // Pega as demais notícias
//        return view('blog.index', compact('featuredNews', 'news'));

        $techNews = TechNews::all();
        return view('blog.index', compact('techNews'));
    }

    public function show($id)
    {
        // Busque a notícia pelo ID. Se usar Eloquent:
        // $article = News::findOrFail($id);

        // Para fins de exemplo, vamos simular uma notícia:
        $article = (object)[
            'id'            => $id,
            'title'         => 'Título da Notícia Exemplo',
            'description'   => 'Descrição curta da notícia.',
            'content'       => '<p>Conteúdo completo da notícia com mais detalhes, imagens, links, etc.</p>',
            'url_to_image'  => 'https://via.placeholder.com/800x400',
            'source_name'   => 'Tech News'
        ];

        return view('news.show', compact('article'));
    }

    public function subscribe(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
            'name'  => 'nullable|string|max:255',
        ]);

        // Armazena o nome e o e-mail na tabela newsletter_subscriptions
        NewsletterSubscription::create([
            'name'  => $data['name'] ?? null,
            'email' => $data['email']
        ]);

        $name = $data['name'] ?? 'Subscriber';

        // Envia o e-mail de confirmação
        Mail::to($data['email'])->send(new ConfirmMail($name));

        return response()->json(['message' => 'Obrigado por se inscrever na newsletter!']);
    }
}
