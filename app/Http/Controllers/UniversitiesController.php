<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\University;
use Image;

class UniversitiesController extends Controller
{
    public function index()
    {
        $data       = University::get();
        $content    = 'Universities';
        $panel_name = 'Universities';

        return view('content.backend.'.strtolower($content).'.index', 
                compact(
                    'data', 
                    'content', 
                    'panel_name'
                )
            );
    }

    public function create()
    {
        $content    = 'Universities';
        $panel_name = 'Universities';

        return  view('content.backend.'.strtolower($content).'.create', 
                compact(
                    'content', 
                    'panel_name'
                )
            );
    }

    public function store(Request $request)
    {
        $content    = 'Universities';

        $this->validate($request, [
            'logo'      => 'required|image|mimes:png,jpg,jpeg',
            'nama'      => 'required',
        ]);

        $image = $request->file('logo');

        // 

            $img = Image::make($image);

            $img->resize(84, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save('storage/app/public/images/Universities/'.$image->hashName());

        //
        // $image->storeAs('public/images/'.$content, $image->hashName());

        $data = University::create([
            'nama'      => $request->nama,
            'logo'      => $image->hashName()
        ]);

        if($data)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data successfully saved!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(University $University)
    {
        $content    = 'Universities';
        $panel_name = 'Universities';
        
        return  view('content.backend.'.strtolower($content).'.edit', 
                compact(
                    'content', 
                    'panel_name',
                    'University'
                )
            );
    }

    public function update(Request $request, University $University)
    {
        $content    = 'Universities';

        $this->validate($request, [
            'nama'      => 'required',
            'logo'      => 'image|mimes:png,jpg,jpeg',
        ]);

        $University = University::findOrFail($University->id);

        if($request->file('logo') == "") {
            $University->update([
                'nama'      => $request->nama,
            ]);

        } else {
            Storage::disk('local')->delete('public/images/'.$content.'/'.$University->logo);

            $image = $request->file('logo');
            $image->storeAs('public/images/'.$content, $image->hashName());

            $University->update([
                'logo'     => $image->hashName(),
                'nama'     => $request->nama
            ]);
        }

        if($University)
        {
            return redirect()
                ->route($content.'.index')
                ->with(['Success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function show(University $University)
    {
        $content    = 'Universities';
        $panel_name = 'Universities';
        
        return  view('content.backend.'.strtolower($content).'.show', 
                compact(
                    'content', 
                    'panel_name',
                    'University'
                )
            );
    }

    public function destroy($id)
    {
        $content    = 'Universities';
        $panel_name = 'Universities';

        $university = University::findOrFail($id);
        Storage::disk('local')->delete('public/images/'.$content.$university->logo);
        $university->delete();

        if($university){        
            return redirect()
                ->route($content.'.index')
                ->with(['Deleted' => 'Data successfully deleted!']);
        }else{
            return redirect()
                ->route($content.'.index')
                ->with(['Error' => 'Data Gagal Disimpan!']);
        }
    }
}
