<?php

namespace App\Http\Controllers;


use App\Http\Requests\Admin\PageRequest;
use App\Http\Requests\signupRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Facility;
use App\Models\Header;
use App\Models\Member;
use App\Models\Page;
use AWS\CRT\HTTP\Request;

class PageController extends \App\Http\Controllers\Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        $page = Page::where('title', 'Homepagina')->first();
        $headers = Header::all();
        $facilities = Facility::where('published', '=', 1)->get();

        return view('pages.homepage', [
            'headers' => $headers,
            'page' => $page,
            'facilities' => $facilities
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $page = Page::where('title', $title)->first();
        if ($page != null) {
            return view('pages.show', [
                'page' => $page
            ]);
        } else {
            abort('404');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $page = Page::where('title', __FUNCTION__)->get();

        return view('pages.contact', [
            'page' => $page
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ledenMail()
    {
        $members = Member::all();
        return view('admin.customs.index', [
            'members' => $members
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signUp()
    {
        return view('pages.signup');
    }

    /**
     * Handle the property contact form
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendContact(ContactRequest $request)
    {
        \Mail::send('mails.content.contact', ['request' => $request], function ($m) use ($request) {
            $m->sender('meespols@gmail.com', 'mees')
                ->from('meespols@gmail.com', 'mees')
                ->to('mees.pols@hotmail.com', 'Stal Nieuwland')
                ->subject('Vraag gesteld op ' . substr($request->root(), 7));
        });

        \Flash::success('We hebben je bericht ontvangen, we zullen zo spoedig mogelijk reageren.');

        return \Redirect::to(\URL::previous() . '#contact')->with(['status' => 'send']);
    }

    /**
     * Handle the property contact form
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendSignup(signupRequest $request)
    {
        $newMember = new Member();
        $newMember->published = 1;
        $newMember->fill($request->all());
        $newMember->save();

        foreach ($request->farriers as $farrier) {
            if ($farrier[0] != null and $farrier[1] != null) {
                $newMember->farriers()->create([
                    'member_id' => $newMember->id,
                    'name' => $farrier[0],
                    'phone' => $farrier[1],
                ]);
            }
        }

        foreach ($request->vets as $vet) {
            if ($vet[0] != null and $vet[1] != null) {
                $newMember->vets()->create([
                    'member_id' => $newMember->id,
                    'name' => $vet[0],
                    'phone' => $vet[1],
                ]);
            }
        }

        foreach ($request->horses as $horses)
            if ($horses[0] != null or $horses[1] != null or $horses[2] != 'Geslacht') {
                $newMember->horses()->create([
                    'member_id' => $newMember->id,
                    'name' => $horses[0],
                    'date-birth' => $horses[1],
                    'ubn' => $horses[2],
                    'gender' => $horses[3],
                ]);
            }

        \Mail::send('mails.content.signup', ['request' => $request], function ($m) use ($request) {
            $m->sender('meespols@gmail.com', 'mees')
                ->from('meespols@gmail.com', 'mees')
                ->to('mees.pols@hotmail.com', 'Stal Nieuwland')
                ->subject('Vraag gesteld op ' . substr($request->root(), 7));
        });

        \Flash::success('We hebben je bericht ontvangen, we zullen zo spoedig mogelijk reageren.');

        return \Redirect::to(\URL::previous() . '#contact')->with(['status' => 'send']);
    }

}

