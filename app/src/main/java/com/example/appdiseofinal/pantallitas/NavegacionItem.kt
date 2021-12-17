package com.example.appdiseofinal.pantallitas

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import com.example.appdiseofinal.R

sealed class NavegacionItem(var route: String, var icon: Int, var title: String)
{
    object Home : NavegacionItem("ListaPelicula", R.drawable.ic_home, "Lista Peliculas")
    object añadepeli : NavegacionItem("Añadepeli", android.R.drawable.stat_notify_more, "Añade una pelicula")
    object borralapeli : NavegacionItem("borralapeli", android.R.drawable.btn_dialog, "Borra la pelicula")
    object interneto : NavegacionItem("WebView", android.R.drawable.ic_search_category_default, "WebView")

}