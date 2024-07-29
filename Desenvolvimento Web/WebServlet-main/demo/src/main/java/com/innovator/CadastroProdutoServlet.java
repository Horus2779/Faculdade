package com.innovator;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/CadastroProdutoServlet")
public class CadastroProdutoServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws IOException {
        
        response.setContentType("index.html");
        response.setCharacterEncoding("UTF-8");

        String produtoCode = request.getParameter("produtoCode");
        String produtoDesc = request.getParameter("produtoDesc");
        String unitMedida = request.getParameter("unitMedida");
        String localizacaoProd = request.getParameter("localizacaoProd");
        String precoAquisicao = request.getParameter("precoAquisicao");
        String fabricante = request.getParameter("fabricante");
        String dataCadastro = request.getParameter("dataCadastro");
        String departamento = request.getParameter("departamento");

        
        String mensagem = "Dados recebidos com sucesso!\n" +
                           "Código do Produto: " + produtoCode + "\n" +
                           "Descrição: " + produtoDesc + "\n" +
                           "Unidade de Medida: " + unitMedida + "\n" +
                           "Localização: " + localizacaoProd + "\n" +
                           "Preço de Aquisição: " + precoAquisicao + "\n" +
                           "Fabricante: " + fabricante + "\n" +
                           "Data de Cadastro: " + dataCadastro + "\n" +
                           "Departamento: " + departamento;

        PrintWriter out = response.getWriter();
        out.print(mensagem);
        out.flush();
    }
}

