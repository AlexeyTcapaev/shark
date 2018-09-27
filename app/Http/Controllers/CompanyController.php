<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Activity;
use App\CompanyType;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $Company = Company::add($request);
            $Company->uploadImage($request->file('logo'));
            foreach (json_decode($request->activities) as $activity) {
                $search = Activity::where('name', $activity->name)->first();
                if ($search) {
                    $Company->activities()->attach($search->id);
                } else {
                    $Company->activities()->attach(Activity::add($activity)->id);
                }
            }

            if (empty($Company))
                throw new Exception('Ошибка при создании компании');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $Company;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Company = Company::withAll()->where('creator_id', $id)->get();
            if (empty($Company))
                return response()->json(['error' => 'Компания не найдены'], 404);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $Company;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $Company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
            $Company = Company::findOrFail($id);
            if (empty($Company))
                return response()->json(['error' => 'Компания не найдена'], 404);
            else {
                $Company->update($request->all());
                if ($request->hasFile('image')) {
                    $Company->uploadImage($request->file('image'));
                }
                $activities = Activity::findAndUpdate(json_decode($request->activities), $product->id);
                $product->activities = $activities;
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $Company;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $Company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $Company)
    {
        try {
            $Company = Company::findOrFail($id);
            if (empty($Company))
                return response()->json(['error' => 'Компания не найдена'], 404);
            else {
                $Company->remove();
                return response()->json(['message' => 'Компания успешно удалена'], 200);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
