<?php
/**
 * Created by PhpStorm.
 * User: Pank
 * Date: 5/12/2015
 * Time: 11:08 PM
 */

class AdShipController extends BaseController {

    public function index()
    {
        $limit = Input::get('limit', 15);

        $ships = Ship::simplePaginate($limit);

        return View::make('admin.ship.index', array(
            'ships' => $ships,
        ));
    }

    /**
     * create new block
     */
    public  function create()
    {

        return View::make('admin.ship.form');
    }

    public function store()
    {
        $ship = new Ship;
        $ship->country = Input::get('country');
        $ship->city = Input::get('city');
        $ship->price = Input::get('price');

        $save_ship = $ship->save();

        return Redirect::action('AdShipController@index');
    }

    /**
     * show the form for editing the specifies role
     *
     * @param integer $id
     * return mixes
     */
    public function edit($id)
    {
        $ship = Ship::find($id);

        return View::make('admin.ship.form', compact('ship'));
    }

    /**
     * update the sprcified resource in storage
     *
     * @param int $id
     * return Response
     */
    public function update($id)
    {

        $ship = Ship::findOrFail($id);
//        $validator = Validator::make($data = Input::all());
//
//        if ($validator->fails()) {
//            return Redirect::back()->withErrors($validator)->withInput();
//        }
        $ship->country = Input::get('country');
        $ship->city = Input::get('city');
        $ship->price = Input::get('price');
        $ship->update();
        return Redirect::action('AdShipController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $ship = Ship::find($id);

        if (Request::isMethod('GET')) {
            return View::make('admin.ship.delete', compact('ship'));
        } else {
            $ship->delete();
            return Redirect::action('AdShipController@index');
        }
    }
}