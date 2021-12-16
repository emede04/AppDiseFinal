package com.example.appdiseofinal.pantallitas

import androidx.lifecycle.LiveData
import androidx.lifecycle.MutableLiveData
import androidx.lifecycle.ViewModel
import com.example.appdiseofinal.R

sealed class NavegacionItem(var route: String, var icon: Int, var title: String)
{
    object Home : NavegacionItem("ListaPelicula", R.drawable.ic_home, "Lista Peliculas")
    object Profile : NavegacionItem("BD", R.drawable.ic_profile, "BD")
    object Settings : NavegacionItem("WebView", R.drawable.ic_settings, "WebView")
    object Share : NavegacionItem("share", R.drawable.ic_share, "Share")
    object Contact : NavegacionItem("contact", R.drawable.ic_contact, "Contacto")
}